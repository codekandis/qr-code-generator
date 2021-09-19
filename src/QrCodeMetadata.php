<?php declare( strict_types = 1 );
namespace CodeKandis\QrCodeGenerator;

/**
 * Represents a QR code metadata.
 * @package codekandis/qr-code-generator
 * @author Christian Ramelow <info@codekandis.net>
 */
class QrCodeMetadata implements QrCodeMetadataInterface
{
	/**
	 * Stores the version of the QR code.
	 * @var int
	 */
	private int $version;

	/**
	 * Stores the error correction level of the QR code.
	 * @var string
	 */
	private string $errorCorrectionLevel;

	/**
	 * Stores the encoding mode of the QR code.
	 * @var string
	 */
	private string $encodingMode;

	/**
	 * Stores the size of the QR code.
	 * @var int
	 */
	private int $size;

	/**
	 * Constructor method.
	 * @param int $version The version of the QR code.
	 * @param string $errorCorrectionLevel The error correction level of the QR code.
	 * @param string $encodingMode The encoding mode of the QR code.
	 */
	public function __construct( int $version, string $errorCorrectionLevel, string $encodingMode )
	{
		$this->version              = $version;
		$this->errorCorrectionLevel = $errorCorrectionLevel;
		$this->encodingMode         = $encodingMode;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getVersion(): int
	{
		return $this->version;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getErrorCorrectionLevel(): string
	{
		return $this->errorCorrectionLevel;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getEncodingMode(): string
	{
		return $this->encodingMode;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getMatrixSize(): int
	{
		return $this->size ?? $this->size = 21 + ( $this->version - 1 ) * 4;
	}
}
