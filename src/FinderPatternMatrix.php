<?php declare( strict_types = 1 );
namespace CodeKandis\QrCodeGenerator;

/**
 * Represents a QR code finder pattern matrix.
 * @package codekandis/qr-code-generator
 * @author Christian Ramelow <info@codekandis.net>
 */
class FinderPatternMatrix extends AbstractPatternMatrix
{
	/**
	 * {@inheritDoc}
	 */
	protected array $data = [
		[
			true,
			true,
			true,
			true,
			true,
			true,
			true
		],
		[
			true,
			false,
			false,
			false,
			false,
			false,
			true
		],
		[
			true,
			false,
			true,
			true,
			true,
			false,
			true
		],
		[
			true,
			false,
			true,
			true,
			true,
			false,
			true
		],
		[
			true,
			false,
			true,
			true,
			true,
			false,
			true
		],
		[
			true,
			false,
			false,
			false,
			false,
			false,
			true
		],
		[
			true,
			true,
			true,
			true,
			true,
			true,
			true
		],
	];
}
