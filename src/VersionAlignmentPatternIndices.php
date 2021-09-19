<?php declare( strict_types = 1 );
namespace CodeKandis\QrCodeGenerator;

/**
 * Represents an enumeration of QR code version alignment pattern indices.
 * @package codekandis/qr-code-generator
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class VersionAlignmentPatternIndices
{
	/**
	 * Represents the alignment pattern indices of the QR code version `1`.
	 * @var int[]
	 */
	public const V1 = [
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `2`.
	 * @var int[]
	 */
	public const V2 = [
		6,
		18
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `3`.
	 * @var int[]
	 */
	public const V3 = [
		6,
		22
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `4`.
	 * @var int[]
	 */
	public const V4 = [
		6,
		26
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `5`.
	 * @var int[]
	 */
	public const V5 = [
		6,
		30
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `6`.
	 * @var int[]
	 */
	public const V6 = [
		6,
		34
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `7`.
	 * @var int[]
	 */
	public const V7 = [
		6,
		22,
		38
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `8`.
	 * @var int[]
	 */
	public const V8 = [
		6,
		24,
		42
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `9`.
	 * @var int[]
	 */
	public const V9 = [
		6,
		26,
		46
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `10`.
	 * @var int[]
	 */
	public const V10 = [
		6,
		28,
		50
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `11`.
	 * @var int[]
	 */
	public const V11 = [
		6,
		30,
		54
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `12`.
	 * @var int[]
	 */
	public const V12 = [
		6,
		32,
		58
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `13`.
	 * @var int[]
	 */
	public const V13 = [
		6,
		34,
		62
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `14`.
	 * @var int[]
	 */
	public const V14 = [
		6,
		26,
		46,
		66
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `15`.
	 * @var int[]
	 */
	public const V15 = [
		6,
		26,
		48,
		70
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `16`.
	 * @var int[]
	 */
	public const V16 = [
		6,
		26,
		50,
		74
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `17`.
	 * @var int[]
	 */
	public const V17 = [
		6,
		30,
		54,
		78
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `18`.
	 * @var int[]
	 */
	public const V18 = [
		6,
		30,
		56,
		82
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `19`.
	 * @var int[]
	 */
	public const V19 = [
		6,
		30,
		58,
		86
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `20`.
	 * @var int[]
	 */
	public const V20 = [
		6,
		34,
		62,
		90
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `21`.
	 * @var int[]
	 */
	public const V21 = [
		6,
		28,
		50,
		72,
		94
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `22`.
	 * @var int[]
	 */
	public const V22 = [
		6,
		26,
		50,
		74,
		98
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `23`.
	 * @var int[]
	 */
	public const V23 = [
		6,
		30,
		54,
		78,
		102
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `24`.
	 * @var int[]
	 */
	public const V24 = [
		6,
		28,
		54,
		80,
		106
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `25`.
	 * @var int[]
	 */
	public const V25 = [
		6,
		32,
		58,
		84,
		110
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `26`.
	 * @var int[]
	 */
	public const V26 = [
		6,
		30,
		58,
		86,
		114
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `27`.
	 * @var int[]
	 */
	public const V27 = [
		6,
		34,
		62,
		90,
		118
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `28`.
	 * @var int[]
	 */
	public const V28 = [
		6,
		26,
		50,
		74,
		98,
		122
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `29`.
	 * @var int[]
	 */
	public const V29 = [
		6,
		30,
		54,
		78,
		102,
		126
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `30`.
	 * @var int[]
	 */
	public const V30 = [
		6,
		26,
		52,
		78,
		104,
		130
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `31`.
	 * @var int[]
	 */
	public const V31 = [
		6,
		30,
		56,
		82,
		108,
		134
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `32`.
	 * @var int[]
	 */
	public const V32 = [
		6,
		34,
		60,
		86,
		112,
		138
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `33`.
	 * @var int[]
	 */
	public const V33 = [
		6,
		30,
		58,
		86,
		114,
		142
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `34`.
	 * @var int[]
	 */
	public const V34 = [
		6,
		34,
		62,
		90,
		118,
		146
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `35`.
	 * @var int[]
	 */
	public const V35 = [
		6,
		30,
		54,
		78,
		102,
		126,
		150
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `36`.
	 * @var int[]
	 */
	public const V36 = [
		6,
		24,
		50,
		76,
		102,
		128,
		154
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `37`.
	 * @var int[]
	 */
	public const V37 = [
		6,
		28,
		54,
		80,
		106,
		132,
		158
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `38`.
	 * @var int[]
	 */
	public const V38 = [
		6,
		32,
		58,
		84,
		110,
		136,
		162
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `39`.
	 * @var int[]
	 */
	public const V39 = [
		6,
		26,
		54,
		82,
		110,
		138,
		166
	];

	/**
	 * Represents the alignment pattern indices of the QR code version `40`.
	 * @var int[]
	 */
	public const V40 = [
		6,
		30,
		58,
		86,
		114,
		142,
		170
	];
}
