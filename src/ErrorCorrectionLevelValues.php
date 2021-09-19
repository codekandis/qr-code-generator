<?php declare( strict_types = 1 );
namespace CodeKandis\QrCodeGenerator;

/**
 * Represents an enumeration of values of error correction levels.
 * @package codekandis/qr-code-generator
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class ErrorCorrectionLevelValues
{
	/**
	 * Represents the integer value of the error correction level `L`.
	 * @var int
	 */
	public const L = 0b01;

	/**
	 * Represents the integer value of the error correction level `M`.
	 * @var int
	 */
	public const M = 0b00;

	/**
	 * Represents the integer value of the error correction level `Q`.
	 * @var int
	 */
	public const Q = 0b11;

	/**
	 * Represents the integer value of the correction level `H`.
	 * @var int
	 */
	public const H = 0b10;
}
