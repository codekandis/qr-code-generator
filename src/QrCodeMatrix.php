<?php declare( strict_types = 1 );
namespace CodeKandis\QrCodeGenerator;

use function array_fill;

/**
 * Represents a QR code matrix.
 * @package codekandis/qr-code-generator
 * @author Christian Ramelow <info@codekandis.net>
 */
class QrCodeMatrix implements QrCodeMatrixInterface
{
	/**
	 * Stores the data of the QR code matrix.
	 * @var bool[][]
	 */
	private array $data;

	/**
	 * Stores the size of the QR code matrix.
	 * @var int
	 */
	private int $size;

	/**
	 * Constructor method.
	 * @param int The size of the QR code matrix.
	 */
	public function __construct( int $size )
	{
		$this->size = $size;

		$this->initializeData();
	}

	/**
	 * Initializes the matrix data.
	 */
	private function initializeData()
	{
		$this->data = array_fill(
			0,
			$this->size,
			array_fill( 0, $this->size, null )
		);
	}

	/**
	 * {@inheritDoc}
	 */
	public function getSize(): int
	{
		return $this->size;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getValue( int $x, int $y ): ?bool
	{
		return $this->data[ $x ][ $y ];
	}

	/**
	 * {@inheritDoc}
	 */
	public function setValue( int $x, int $y, bool $value ): void
	{
		$this->data[ $x ][ $y ] = $value;
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		return $this->data;
	}
}
