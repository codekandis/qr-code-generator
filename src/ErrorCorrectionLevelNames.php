<?php declare( strict_types = 1 );
namespace CodeKandis\QrCodeGenerator;

/**
 * Represents an enumeration of names of error correction levels.
 * @package codekandis/qr-code-generator
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class ErrorCorrectionLevelNames
{
	/**
	 * Represents the error correction level `L`.
	 * @var string
	 */
	public const L = 'L';

	/**
	 * Represents the error correction level `M`.
	 * @var string
	 */
	public const M = 'M';

	/**
	 * Represents the error correction level `Q`.
	 * @var string
	 */
	public const Q = 'Q';

	/**
	 * Represents the error correction level `H`.
	 * @var string
	 */
	public const H = 'H';
}
