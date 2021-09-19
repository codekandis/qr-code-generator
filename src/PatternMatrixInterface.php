<?php declare( strict_types = 1 );
namespace CodeKandis\QrCodeGenerator;

/**
 * Represents the interface of any pattern matrix.
 * @package codekandis/qr-code-generator
 * @author Christian Ramelow <info@codekandis.net>
 */
interface PatternMatrixInterface
{
	/**
	 * Gets the size of the QR code pattern matrix.
	 * @return int The size of the QR code pattern matrix.
	 */
	public function getSize(): int;

	/**
	 * Gets the value from a specific index.
	 * @param int $x The X index of the matrix.
	 * @param int $y The Y index of the matrix.
	 * @return bool The value at the index.
	 */
	public function getValue( int $x, int $y ): bool;

	/**
	 * Transforms the QR code pattern matrix into its array representation.
	 * @return bool[][] The array representation of the QR code pattern matrix.
	 */
	public function toArray(): array;
}
