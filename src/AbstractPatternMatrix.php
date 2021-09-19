<?php declare( strict_types = 1 );
namespace CodeKandis\QrCodeGenerator;

/**
 * Represents the base class of any pattern matrix.
 * @package codekandis/qr-code-generator
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractPatternMatrix implements PatternMatrixInterface
{
	/**
	 * Stores the data of the pattern matrix.
	 * @var bool[][]
	 */
	protected array $data;

	/**
	 * {@inheritDoc}
	 */
	public function getSize(): int
	{
		return count( $this->data );
	}

	/**
	 * {@inheritDoc}
	 */
	public function getValue( int $x, int $y ): bool
	{
		return $this->data[ $x ][ $y ];
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		return $this->data;
	}
}
