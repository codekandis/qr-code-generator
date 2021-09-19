<?php declare( strict_types = 1 );
namespace CodeKandis\QrCodeGenerator;

/**
 * Represents an enumeration of names of encoding modes.
 * @package codekandis/qr-code-generator
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class EncodingModeNames
{
	/**
	 * Represents the name of the encoding mode `Numeric`.
	 * @var string
	 */
	public const NUMERIC = 'Numeric';

	/**
	 * Represents the name of the encoding mode `Alphanumeric`.
	 * @var string
	 */
	public const ALPHANUMERIC = 'Alphanumeric';

	/**
	 * Represents the name of the encoding mode `Bytes`.
	 * @var string
	 */
	public const BYTES = 'Bytes';

	/**
	 * Represents the name of the encoding mode `Kanji`.
	 * @var string
	 */
	public const KANJI = 'Kanji';
}
