<?php declare( strict_types = 1 );
namespace CodeKandis\QrCodeGenerator;

use CodeKandis\ConstantsClassesTranslator\ConstantsClassesTranslator;

/**
 * Represents a QR code encoder.
 * @package codekandis/qr-code-generator
 * @author Christian Ramelow <info@codekandis.net>
 */
class QrCodeEncoder implements QrCodeEncoderInterface
{
	/**
	 * Stores the metadata of the QR code.
	 * @var QrCodeMetadataInterface
	 */
	private QrCodeMetadataInterface $metadata;

	/**
	 * Constructor method.
	 * @param int $version The version of the QR code.
	 * @param string $errorCorrectionLevel The error correction level of the QR code.
	 * @param string $encodingMode The encoding mode of the QR code.
	 */
	public function __construct( int $version, string $errorCorrectionLevel, string $encodingMode )
	{
		$this->metadata = new QrCodeMetadata( $version, $errorCorrectionLevel, $encodingMode );
	}

	/**
	 * Gets the metadata of the QR code.
	 * @return QrCodeMetadataInterface The metadata of the QR code.
	 */
	public function getMetadata(): QrCodeMetadataInterface
	{
		return $this->metadata;
	}

	/**
	 * Inserts the finder patterns into the matrix.
	 * @param QrCodeMatrixInterface $matrix The matrix to insert the finder patterns into.
	 * @param PatternMatrixInterface $finderPatternMatrix The finder pattern matrix to insert.
	 */
	private function insertFinderPatterns( QrCodeMatrixInterface $matrix, PatternMatrixInterface $finderPatternMatrix ): void
	{
		$startingIndices = [
			[
				'x' => 0,
				'y' => 0
			],
			[
				'x' => $matrix->getSize() - $finderPatternMatrix->getSize(),
				'y' => 0
			],
			[
				'x' => 0,
				'y' => $matrix->getSize() - $finderPatternMatrix->getSize()
			]
		];

		foreach ( $startingIndices as $startingIndex )
		{
			for ( $xIndex = 0; $xIndex < $finderPatternMatrix->getSize(); $xIndex++ )
			{
				for ( $yIndex = 0; $yIndex < $finderPatternMatrix->getSize(); $yIndex++ )
				{
					$matrix->setValue(
						$startingIndex[ 'x' ] + $xIndex,
						$startingIndex[ 'y' ] + $yIndex,
						$finderPatternMatrix->getValue( $xIndex, $yIndex )
					);
				}
			}
		}
	}

	/**
	 * Inserts the separators into the matrix.
	 * @param QrCodeMatrixInterface $matrix The matrix to insert the separators into.
	 * @param PatternMatrixInterface $finderPatternMatrix The finder pattern matrix to use for index calculation.
	 */
	public function insertSeparators( QrCodeMatrixInterface $matrix, PatternMatrixInterface $finderPatternMatrix )
	{
		for ( $index = 0; $index < $finderPatternMatrix->getSize(); $index++ )
		{
			$matrix->setValue( $finderPatternMatrix->getSize(), $index, false );
			$matrix->setValue( $index, $finderPatternMatrix->getSize(), false );

			$matrix->setValue( $this->metadata->getMatrixSize() - $finderPatternMatrix->getSize() - 1, $index, false );
			$matrix->setValue( $this->metadata->getMatrixSize() - $index - 1, $finderPatternMatrix->getSize(), false );

			$matrix->setValue( $finderPatternMatrix->getSize(), $this->metadata->getMatrixSize() - $index - 1, false );
			$matrix->setValue( $index, $this->metadata->getMatrixSize() - $finderPatternMatrix->getSize() - 1, false );
		}
		$matrix->setValue( $finderPatternMatrix->getSize(), $finderPatternMatrix->getSize(), false );
		$matrix->setValue( $this->metadata->getMatrixSize() - $finderPatternMatrix->getSize() - 1, $finderPatternMatrix->getSize(), false );
		$matrix->setValue( $finderPatternMatrix->getSize(), $this->metadata->getMatrixSize() - $finderPatternMatrix->getSize() - 1, false );
	}

	/**
	 * Inserts the timing patterns into the matrix.
	 * @param QrCodeMatrixInterface $matrix The matrix to insert the timing patterns into.
	 * @param PatternMatrixInterface $finderPatternMatrix The finder pattern matrix to use for index calculation.
	 */
	private function insertTimingPatterns( QrCodeMatrixInterface $matrix, PatternMatrixInterface $finderPatternMatrix ): void
	{
		$permanentIndex = $finderPatternMatrix->getSize() - 1;
		$index          = $finderPatternMatrix->getSize() + 1;
		while ( $index <= $this->metadata->getMatrixSize() - $finderPatternMatrix->getSize() )
		{
			$matrix->setValue( $index, $permanentIndex, true );
			$matrix->setValue( $permanentIndex, $index, true );

			$index += 2;
		}
	}

	/**
	 * Inserts the alignment patterns into the matrix.
	 * @param QrCodeMatrixInterface $matrix The matrix to insert the alignment patterns into.
	 * @param PatternMatrixInterface $alignmentPatternMatrix The alignment pattern matrix to use for index calculation.
	 */
	private function insertAligmentPatterns( QrCodeMatrixInterface $matrix, PatternMatrixInterface $alignmentPatternMatrix )
	{
		$patternIndices = ( new ConstantsClassesTranslator(
			Versions::class,
			VersionAlignmentPatternIndices::class
		) )
			->translate(
				$this->metadata->getVersion()
			);

		if ( [] !== $patternIndices )
		{
			$minPatternIndex = min( $patternIndices );
			$maxPatternIndex = max( $patternIndices );

			foreach ( $patternIndices as $patternXIndex )
			{
				foreach ( $patternIndices as $patternYIndex )
				{
					if (
						!( $minPatternIndex === $patternXIndex && $minPatternIndex === $patternYIndex )
						&& !( $maxPatternIndex === $patternXIndex && $minPatternIndex === $patternYIndex )
						&& !( $minPatternIndex === $patternXIndex && $maxPatternIndex === $patternYIndex )
					)
					{
						for ( $xIndex = 0; $xIndex < $alignmentPatternMatrix->getSize(); $xIndex++ )
						{
							for ( $yIndex = 0; $yIndex < $alignmentPatternMatrix->getSize(); $yIndex++ )
							{
								$matrix->setValue(
									$patternXIndex + $xIndex - 2,
									$patternYIndex + $yIndex - 2,
									$alignmentPatternMatrix->getValue( $xIndex, $yIndex )
								);
							}
						}
					}
				}
			}
		}
	}

	/**
	 * Inserts the dark module into the matrix.
	 * @param QrCodeMatrixInterface $matrix The matrix to insert the dark module into.
	 */
	private function insertDarkModule( QrCodeMatrixInterface $matrix ): void
	{
		$matrix->setValue( 8, $this->metadata->getMatrixSize() - 8, true );
	}

	/**
	 * {@inheritDoc}
	 */
	public function encode( string $data ): QrCodeMatrixInterface
	{
		$matrix = new QrCodeMatrix( $this->metadata->getMatrixSize() );

		$finderPatternMatrix    = new FinderPatternMatrix();
		$alignmentPatternMatrix = new AlignmentPatternMatrix();

		$this->insertFinderPatterns( $matrix, $finderPatternMatrix );
		$this->insertSeparators( $matrix, $finderPatternMatrix );
		$this->insertTimingPatterns( $matrix, $finderPatternMatrix );
		$this->insertAligmentPatterns( $matrix, $alignmentPatternMatrix );
		$this->insertDarkModule( $matrix );

		return $matrix;
	}
}
