<?php declare( strict_types = 1 );
namespace CodeKandis\QrCodeGenerator\Renderers;

use CodeKandis\QrCodeGenerator\QrCodeMatrixInterface;
use function sprintf;

/**
 * Represents an SVG renderer.
 * @package codekandis/qr-code-generator
 * @author Christian Ramelow <info@codekandis.net>
 */
class SvgRenderer implements SvgRendererInterface
{
	private QrCodeMatrixInterface $matrix;

	private int $scale;

	public function __construct( QrCodeMatrixInterface $matrix, int $scale = 1 )
	{
		$this->matrix = $matrix;
		$this->scale  = $scale;
	}

	public function render(): string
	{
		$matrixSize = $this->matrix->getSize();

		$matrixMarkup = '';
		for ( $yIndex = 0; $yIndex < $matrixSize; $yIndex++ )
		{
			for ( $xIndex = 0; $xIndex < $matrixSize; $xIndex++ )
			{
				$value        = $this->matrix->getValue( $xIndex, $yIndex );
				$matrixMarkup .= sprintf(
					'<rect x="%3$d" y="%4$d" width="%1$d" height="%1$d" style="fill:rgb(%2$s)"/>',
					$this->scale,
					null === $value
						? '192,192,192'
						: ( false === $value
						? '255,255,255'
						: '0,0,0' ),
					$xIndex * $this->scale,
					$yIndex * $this->scale
				);
			}
		}

		return sprintf(
			'<svg xmlns="http://www.w3.org/2000/svg" width="%1$s" height="%1$s">%2$s</svg>',
			$matrixSize * $this->scale,
			$matrixMarkup
		);
	}
}
