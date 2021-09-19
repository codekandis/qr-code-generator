<?php declare( strict_types = 1 );
namespace CodeKandis\QrCodeGenerator;

/**
 * Represents a QR code alignment pattern matrix.
 * @package codekandis/qr-code-generator
 * @author Christian Ramelow <info@codekandis.net>
 */
class AlignmentPatternMatrix extends AbstractPatternMatrix
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
			true
		],
		[
			true,
			false,
			false,
			false,
			true
		],
		[
			true,
			false,
			true,
			false,
			true
		],
		[
			true,
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
			true
		],
	];
}
