<?php declare( strict_types = 1 );
namespace CodeKandis\QrCodeGenerator;

/**
 * Represents the interface of any QR code encoder.
 * @package codekandis/qr-code-generator
 * @author Christian Ramelow <info@codekandis.net>
 */
interface QrCodeEncoderInterface
{
	/**
	 * Gets the metadata of the QR code.
	 * @return QrCodeMetadataInterface The metadata of the QR code.
	 */
	public function getMetadata(): QrCodeMetadataInterface;

	/**
	 * Encodes data into a QR code.
	 * @param string $data The data to encode.
	 * @return QrCodeMatrixInterface The encoded QR code.
	 */
	public function encode( string $data ): QrCodeMatrixInterface;
}
