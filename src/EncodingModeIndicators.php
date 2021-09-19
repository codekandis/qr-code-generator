<?php declare( strict_types = 1 );
namespace CodeKandis\QrCodeGenerator;

/**
 * Represents an enumeration of indicators of encoding modes.
 * @package codekandis/qr-code-generator
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class EncodingModeIndicators
{
	/**
	 * Represents the indicator of the encoding mode `Numeric`.
	 * @var int
	 */
	public const NUMERIC = 0b0001;

	/**
	 * Represents the indicator of the encoding mode `Alphanumeric`.
	 * @var int
	 */
	public const ALPHANUMERIC = 0b0010;

	/**
	 * Represents the indicator of the encoding mode `Bytes`.
	 * @var int
	 */
	public const BYTES = 0b0100;

	/**
	 * Represents the indicator of the encoding mode `Kanji`.
	 * @var int
	 */
	public const KANJI = 0b1000;
}
