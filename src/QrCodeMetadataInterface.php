<?php declare( strict_types = 1 );
namespace CodeKandis\QrCodeGenerator;

/**
 * Represents the interface of any QR code metadata.
 * @package codekandis/qr-code-generator
 * @author Christian Ramelow <info@codekandis.net>
 */
interface QrCodeMetadataInterface
{
	/**
	 * Gets the version of the QR code.
	 * @return int The version of the QR code.
	 */
	public function getVersion(): int;

	/**
	 * Gets the error correction level of the QR code.
	 * @return string The error correction level of the QR code.
	 */
	public function getErrorCorrectionLevel(): string;

	/**
	 * Gets the encoding mode of the QR code.
	 * @return string The encoding mode of the QR code.
	 */
	public function getEncodingMode(): string;

	/**
	 * Gets the matrix size of the QR code.
	 * @return int The matrix size of the QR code.
	 */
	public function getMatrixSize(): int;
}
