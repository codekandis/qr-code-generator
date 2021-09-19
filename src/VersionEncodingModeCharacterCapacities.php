<?php declare( strict_types = 1 );
namespace CodeKandis\QrCodeGenerator;

/**
 * Represents a mapping of versions, encoding modes and their respective character capacities.
 * @package codekandis/qr-code-generator
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class VersionEncodingModeCharacterCapacities
{
	public const values = [
		'Versions::V1'  => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 41,
				'EncodingModeNames::ALPHANUMERIC' => 25,
				'EncodingModeNames::BYTES'        => 17,
				'EncodingModeNames::KANJI'        => 10
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 34,
				'EncodingModeNames::ALPHANUMERIC' => 20,
				'EncodingModeNames::BYTES'        => 14,
				'EncodingModeNames::KANJI'        => 8
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 27,
				'EncodingModeNames::ALPHANUMERIC' => 16,
				'EncodingModeNames::BYTES'        => 11,
				'EncodingModeNames::KANJI'        => 7
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 17,
				'EncodingModeNames::ALPHANUMERIC' => 10,
				'EncodingModeNames::BYTES'        => 7,
				'EncodingModeNames::KANJI'        => 4
			],
		],
		'Versions::V2'  => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 77,
				'EncodingModeNames::ALPHANUMERIC' => 47,
				'EncodingModeNames::BYTES'        => 32,
				'EncodingModeNames::KANJI'        => 20
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 63,
				'EncodingModeNames::ALPHANUMERIC' => 38,
				'EncodingModeNames::BYTES'        => 26,
				'EncodingModeNames::KANJI'        => 16
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 48,
				'EncodingModeNames::ALPHANUMERIC' => 29,
				'EncodingModeNames::BYTES'        => 20,
				'EncodingModeNames::KANJI'        => 12
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 34,
				'EncodingModeNames::ALPHANUMERIC' => 20,
				'EncodingModeNames::BYTES'        => 14,
				'EncodingModeNames::KANJI'        => 8
			],
		],
		'Versions::V3'  => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 127,
				'EncodingModeNames::ALPHANUMERIC' => 77,
				'EncodingModeNames::BYTES'        => 53,
				'EncodingModeNames::KANJI'        => 32
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 101,
				'EncodingModeNames::ALPHANUMERIC' => 61,
				'EncodingModeNames::BYTES'        => 42,
				'EncodingModeNames::KANJI'        => 26
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 77,
				'EncodingModeNames::ALPHANUMERIC' => 47,
				'EncodingModeNames::BYTES'        => 32,
				'EncodingModeNames::KANJI'        => 20
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 58,
				'EncodingModeNames::ALPHANUMERIC' => 35,
				'EncodingModeNames::BYTES'        => 24,
				'EncodingModeNames::KANJI'        => 15
			],
		],
		'Versions::V4'  => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 187,
				'EncodingModeNames::ALPHANUMERIC' => 114,
				'EncodingModeNames::BYTES'        => 78,
				'EncodingModeNames::KANJI'        => 48
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 149,
				'EncodingModeNames::ALPHANUMERIC' => 90,
				'EncodingModeNames::BYTES'        => 62,
				'EncodingModeNames::KANJI'        => 38
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 111,
				'EncodingModeNames::ALPHANUMERIC' => 67,
				'EncodingModeNames::BYTES'        => 46,
				'EncodingModeNames::KANJI'        => 28
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 82,
				'EncodingModeNames::ALPHANUMERIC' => 50,
				'EncodingModeNames::BYTES'        => 34,
				'EncodingModeNames::KANJI'        => 21
			],
		],
		'Versions::V5'  => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 255,
				'EncodingModeNames::ALPHANUMERIC' => 154,
				'EncodingModeNames::BYTES'        => 106,
				'EncodingModeNames::KANJI'        => 65
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 202,
				'EncodingModeNames::ALPHANUMERIC' => 122,
				'EncodingModeNames::BYTES'        => 84,
				'EncodingModeNames::KANJI'        => 52
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 144,
				'EncodingModeNames::ALPHANUMERIC' => 87,
				'EncodingModeNames::BYTES'        => 60,
				'EncodingModeNames::KANJI'        => 37
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 106,
				'EncodingModeNames::ALPHANUMERIC' => 64,
				'EncodingModeNames::BYTES'        => 44,
				'EncodingModeNames::KANJI'        => 27
			],
		],
		'Versions::V6'  => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 322,
				'EncodingModeNames::ALPHANUMERIC' => 195,
				'EncodingModeNames::BYTES'        => 134,
				'EncodingModeNames::KANJI'        => 82
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 255,
				'EncodingModeNames::ALPHANUMERIC' => 154,
				'EncodingModeNames::BYTES'        => 106,
				'EncodingModeNames::KANJI'        => 65
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 178,
				'EncodingModeNames::ALPHANUMERIC' => 108,
				'EncodingModeNames::BYTES'        => 74,
				'EncodingModeNames::KANJI'        => 45
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 139,
				'EncodingModeNames::ALPHANUMERIC' => 84,
				'EncodingModeNames::BYTES'        => 58,
				'EncodingModeNames::KANJI'        => 36
			],
		],
		'Versions::V7'  => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 370,
				'EncodingModeNames::ALPHANUMERIC' => 224,
				'EncodingModeNames::BYTES'        => 154,
				'EncodingModeNames::KANJI'        => 95
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 293,
				'EncodingModeNames::ALPHANUMERIC' => 178,
				'EncodingModeNames::BYTES'        => 122,
				'EncodingModeNames::KANJI'        => 75
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 207,
				'EncodingModeNames::ALPHANUMERIC' => 125,
				'EncodingModeNames::BYTES'        => 86,
				'EncodingModeNames::KANJI'        => 53
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 154,
				'EncodingModeNames::ALPHANUMERIC' => 93,
				'EncodingModeNames::BYTES'        => 64,
				'EncodingModeNames::KANJI'        => 39
			],
		],
		'Versions::V8'  => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 461,
				'EncodingModeNames::ALPHANUMERIC' => 279,
				'EncodingModeNames::BYTES'        => 192,
				'EncodingModeNames::KANJI'        => 118
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 365,
				'EncodingModeNames::ALPHANUMERIC' => 221,
				'EncodingModeNames::BYTES'        => 152,
				'EncodingModeNames::KANJI'        => 93
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 259,
				'EncodingModeNames::ALPHANUMERIC' => 157,
				'EncodingModeNames::BYTES'        => 108,
				'EncodingModeNames::KANJI'        => 66
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 202,
				'EncodingModeNames::ALPHANUMERIC' => 122,
				'EncodingModeNames::BYTES'        => 84,
				'EncodingModeNames::KANJI'        => 52
			],
		],
		'Versions::V9'  => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 552,
				'EncodingModeNames::ALPHANUMERIC' => 335,
				'EncodingModeNames::BYTES'        => 230,
				'EncodingModeNames::KANJI'        => 141
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 432,
				'EncodingModeNames::ALPHANUMERIC' => 262,
				'EncodingModeNames::BYTES'        => 180,
				'EncodingModeNames::KANJI'        => 111
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 312,
				'EncodingModeNames::ALPHANUMERIC' => 189,
				'EncodingModeNames::BYTES'        => 130,
				'EncodingModeNames::KANJI'        => 80
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 235,
				'EncodingModeNames::ALPHANUMERIC' => 143,
				'EncodingModeNames::BYTES'        => 98,
				'EncodingModeNames::KANJI'        => 60
			],
		],
		'Versions::V10' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 652,
				'EncodingModeNames::ALPHANUMERIC' => 395,
				'EncodingModeNames::BYTES'        => 271,
				'EncodingModeNames::KANJI'        => 167
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 513,
				'EncodingModeNames::ALPHANUMERIC' => 311,
				'EncodingModeNames::BYTES'        => 213,
				'EncodingModeNames::KANJI'        => 131
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 364,
				'EncodingModeNames::ALPHANUMERIC' => 221,
				'EncodingModeNames::BYTES'        => 151,
				'EncodingModeNames::KANJI'        => 93
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 288,
				'EncodingModeNames::ALPHANUMERIC' => 174,
				'EncodingModeNames::BYTES'        => 119,
				'EncodingModeNames::KANJI'        => 74
			],
		],
		'Versions::V11' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 772,
				'EncodingModeNames::ALPHANUMERIC' => 468,
				'EncodingModeNames::BYTES'        => 321,
				'EncodingModeNames::KANJI'        => 198
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 604,
				'EncodingModeNames::ALPHANUMERIC' => 366,
				'EncodingModeNames::BYTES'        => 251,
				'EncodingModeNames::KANJI'        => 155
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 427,
				'EncodingModeNames::ALPHANUMERIC' => 259,
				'EncodingModeNames::BYTES'        => 177,
				'EncodingModeNames::KANJI'        => 109
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 331,
				'EncodingModeNames::ALPHANUMERIC' => 200,
				'EncodingModeNames::BYTES'        => 137,
				'EncodingModeNames::KANJI'        => 85
			],
		],
		'Versions::V12' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 883,
				'EncodingModeNames::ALPHANUMERIC' => 535,
				'EncodingModeNames::BYTES'        => 367,
				'EncodingModeNames::KANJI'        => 226
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 691,
				'EncodingModeNames::ALPHANUMERIC' => 419,
				'EncodingModeNames::BYTES'        => 287,
				'EncodingModeNames::KANJI'        => 177
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 489,
				'EncodingModeNames::ALPHANUMERIC' => 296,
				'EncodingModeNames::BYTES'        => 203,
				'EncodingModeNames::KANJI'        => 125
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 374,
				'EncodingModeNames::ALPHANUMERIC' => 227,
				'EncodingModeNames::BYTES'        => 155,
				'EncodingModeNames::KANJI'        => 96
			],
		],
		'Versions::V13' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 1022,
				'EncodingModeNames::ALPHANUMERIC' => 619,
				'EncodingModeNames::BYTES'        => 425,
				'EncodingModeNames::KANJI'        => 262
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 796,
				'EncodingModeNames::ALPHANUMERIC' => 483,
				'EncodingModeNames::BYTES'        => 331,
				'EncodingModeNames::KANJI'        => 204
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 580,
				'EncodingModeNames::ALPHANUMERIC' => 352,
				'EncodingModeNames::BYTES'        => 241,
				'EncodingModeNames::KANJI'        => 149
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 427,
				'EncodingModeNames::ALPHANUMERIC' => 259,
				'EncodingModeNames::BYTES'        => 177,
				'EncodingModeNames::KANJI'        => 109
			],
		],
		'Versions::V14' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 1101,
				'EncodingModeNames::ALPHANUMERIC' => 667,
				'EncodingModeNames::BYTES'        => 458,
				'EncodingModeNames::KANJI'        => 282
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 871,
				'EncodingModeNames::ALPHANUMERIC' => 528,
				'EncodingModeNames::BYTES'        => 362,
				'EncodingModeNames::KANJI'        => 223
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 621,
				'EncodingModeNames::ALPHANUMERIC' => 376,
				'EncodingModeNames::BYTES'        => 258,
				'EncodingModeNames::KANJI'        => 159
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 468,
				'EncodingModeNames::ALPHANUMERIC' => 283,
				'EncodingModeNames::BYTES'        => 194,
				'EncodingModeNames::KANJI'        => 120
			],
		],
		'Versions::V15' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 1250,
				'EncodingModeNames::ALPHANUMERIC' => 758,
				'EncodingModeNames::BYTES'        => 520,
				'EncodingModeNames::KANJI'        => 320
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 991,
				'EncodingModeNames::ALPHANUMERIC' => 600,
				'EncodingModeNames::BYTES'        => 412,
				'EncodingModeNames::KANJI'        => 254
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 703,
				'EncodingModeNames::ALPHANUMERIC' => 426,
				'EncodingModeNames::BYTES'        => 292,
				'EncodingModeNames::KANJI'        => 180
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 530,
				'EncodingModeNames::ALPHANUMERIC' => 321,
				'EncodingModeNames::BYTES'        => 220,
				'EncodingModeNames::KANJI'        => 136
			],
		],
		'Versions::V16' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 1408,
				'EncodingModeNames::ALPHANUMERIC' => 854,
				'EncodingModeNames::BYTES'        => 586,
				'EncodingModeNames::KANJI'        => 361
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 1082,
				'EncodingModeNames::ALPHANUMERIC' => 656,
				'EncodingModeNames::BYTES'        => 450,
				'EncodingModeNames::KANJI'        => 277
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 775,
				'EncodingModeNames::ALPHANUMERIC' => 470,
				'EncodingModeNames::BYTES'        => 322,
				'EncodingModeNames::KANJI'        => 198
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 602,
				'EncodingModeNames::ALPHANUMERIC' => 365,
				'EncodingModeNames::BYTES'        => 250,
				'EncodingModeNames::KANJI'        => 154
			],
		],
		'Versions::V17' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 1548,
				'EncodingModeNames::ALPHANUMERIC' => 938,
				'EncodingModeNames::BYTES'        => 644,
				'EncodingModeNames::KANJI'        => 397
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 1212,
				'EncodingModeNames::ALPHANUMERIC' => 734,
				'EncodingModeNames::BYTES'        => 504,
				'EncodingModeNames::KANJI'        => 310
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 876,
				'EncodingModeNames::ALPHANUMERIC' => 531,
				'EncodingModeNames::BYTES'        => 364,
				'EncodingModeNames::KANJI'        => 224
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 674,
				'EncodingModeNames::ALPHANUMERIC' => 408,
				'EncodingModeNames::BYTES'        => 280,
				'EncodingModeNames::KANJI'        => 173
			],
		],
		'Versions::V18' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 1725,
				'EncodingModeNames::ALPHANUMERIC' => 1046,
				'EncodingModeNames::BYTES'        => 718,
				'EncodingModeNames::KANJI'        => 442
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 1346,
				'EncodingModeNames::ALPHANUMERIC' => 816,
				'EncodingModeNames::BYTES'        => 560,
				'EncodingModeNames::KANJI'        => 345
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 948,
				'EncodingModeNames::ALPHANUMERIC' => 574,
				'EncodingModeNames::BYTES'        => 394,
				'EncodingModeNames::KANJI'        => 243
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 746,
				'EncodingModeNames::ALPHANUMERIC' => 452,
				'EncodingModeNames::BYTES'        => 310,
				'EncodingModeNames::KANJI'        => 191
			],
		],
		'Versions::V19' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 1903,
				'EncodingModeNames::ALPHANUMERIC' => 1153,
				'EncodingModeNames::BYTES'        => 792,
				'EncodingModeNames::KANJI'        => 488
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 1500,
				'EncodingModeNames::ALPHANUMERIC' => 909,
				'EncodingModeNames::BYTES'        => 624,
				'EncodingModeNames::KANJI'        => 384
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 1063,
				'EncodingModeNames::ALPHANUMERIC' => 644,
				'EncodingModeNames::BYTES'        => 442,
				'EncodingModeNames::KANJI'        => 272
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 813,
				'EncodingModeNames::ALPHANUMERIC' => 493,
				'EncodingModeNames::BYTES'        => 338,
				'EncodingModeNames::KANJI'        => 208
			],
		],
		'Versions::V20' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 2061,
				'EncodingModeNames::ALPHANUMERIC' => 1249,
				'EncodingModeNames::BYTES'        => 858,
				'EncodingModeNames::KANJI'        => 528
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 1600,
				'EncodingModeNames::ALPHANUMERIC' => 970,
				'EncodingModeNames::BYTES'        => 666,
				'EncodingModeNames::KANJI'        => 410
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 1159,
				'EncodingModeNames::ALPHANUMERIC' => 702,
				'EncodingModeNames::BYTES'        => 482,
				'EncodingModeNames::KANJI'        => 297
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 919,
				'EncodingModeNames::ALPHANUMERIC' => 557,
				'EncodingModeNames::BYTES'        => 382,
				'EncodingModeNames::KANJI'        => 235
			],
		],
		'Versions::V21' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 2232,
				'EncodingModeNames::ALPHANUMERIC' => 1352,
				'EncodingModeNames::BYTES'        => 929,
				'EncodingModeNames::KANJI'        => 572
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 1708,
				'EncodingModeNames::ALPHANUMERIC' => 1035,
				'EncodingModeNames::BYTES'        => 711,
				'EncodingModeNames::KANJI'        => 438
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 1224,
				'EncodingModeNames::ALPHANUMERIC' => 742,
				'EncodingModeNames::BYTES'        => 509,
				'EncodingModeNames::KANJI'        => 314
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 969,
				'EncodingModeNames::ALPHANUMERIC' => 587,
				'EncodingModeNames::BYTES'        => 403,
				'EncodingModeNames::KANJI'        => 248
			],
		],
		'Versions::V22' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 2409,
				'EncodingModeNames::ALPHANUMERIC' => 1460,
				'EncodingModeNames::BYTES'        => 1003,
				'EncodingModeNames::KANJI'        => 618
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 1872,
				'EncodingModeNames::ALPHANUMERIC' => 1134,
				'EncodingModeNames::BYTES'        => 779,
				'EncodingModeNames::KANJI'        => 480
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 1358,
				'EncodingModeNames::ALPHANUMERIC' => 823,
				'EncodingModeNames::BYTES'        => 565,
				'EncodingModeNames::KANJI'        => 348
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 1056,
				'EncodingModeNames::ALPHANUMERIC' => 640,
				'EncodingModeNames::BYTES'        => 439,
				'EncodingModeNames::KANJI'        => 270
			],
		],
		'Versions::V23' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 2620,
				'EncodingModeNames::ALPHANUMERIC' => 1588,
				'EncodingModeNames::BYTES'        => 1091,
				'EncodingModeNames::KANJI'        => 672
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 2059,
				'EncodingModeNames::ALPHANUMERIC' => 1248,
				'EncodingModeNames::BYTES'        => 857,
				'EncodingModeNames::KANJI'        => 528
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 1468,
				'EncodingModeNames::ALPHANUMERIC' => 890,
				'EncodingModeNames::BYTES'        => 611,
				'EncodingModeNames::KANJI'        => 376
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 1108,
				'EncodingModeNames::ALPHANUMERIC' => 672,
				'EncodingModeNames::BYTES'        => 461,
				'EncodingModeNames::KANJI'        => 284
			],
		],
		'Versions::V24' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 2812,
				'EncodingModeNames::ALPHANUMERIC' => 1704,
				'EncodingModeNames::BYTES'        => 1171,
				'EncodingModeNames::KANJI'        => 721
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 2188,
				'EncodingModeNames::ALPHANUMERIC' => 1326,
				'EncodingModeNames::BYTES'        => 911,
				'EncodingModeNames::KANJI'        => 561
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 1588,
				'EncodingModeNames::ALPHANUMERIC' => 963,
				'EncodingModeNames::BYTES'        => 661,
				'EncodingModeNames::KANJI'        => 407
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 1228,
				'EncodingModeNames::ALPHANUMERIC' => 744,
				'EncodingModeNames::BYTES'        => 511,
				'EncodingModeNames::KANJI'        => 315
			],
		],
		'Versions::V25' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 3057,
				'EncodingModeNames::ALPHANUMERIC' => 1853,
				'EncodingModeNames::BYTES'        => 1273,
				'EncodingModeNames::KANJI'        => 784
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 2395,
				'EncodingModeNames::ALPHANUMERIC' => 1451,
				'EncodingModeNames::BYTES'        => 997,
				'EncodingModeNames::KANJI'        => 614
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 1718,
				'EncodingModeNames::ALPHANUMERIC' => 1041,
				'EncodingModeNames::BYTES'        => 715,
				'EncodingModeNames::KANJI'        => 440
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 1286,
				'EncodingModeNames::ALPHANUMERIC' => 779,
				'EncodingModeNames::BYTES'        => 535,
				'EncodingModeNames::KANJI'        => 330
			],
		],
		'Versions::V26' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 3283,
				'EncodingModeNames::ALPHANUMERIC' => 1990,
				'EncodingModeNames::BYTES'        => 1367,
				'EncodingModeNames::KANJI'        => 842
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 2544,
				'EncodingModeNames::ALPHANUMERIC' => 1542,
				'EncodingModeNames::BYTES'        => 1059,
				'EncodingModeNames::KANJI'        => 652
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 1804,
				'EncodingModeNames::ALPHANUMERIC' => 1094,
				'EncodingModeNames::BYTES'        => 751,
				'EncodingModeNames::KANJI'        => 462
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 1425,
				'EncodingModeNames::ALPHANUMERIC' => 864,
				'EncodingModeNames::BYTES'        => 593,
				'EncodingModeNames::KANJI'        => 365
			],
		],
		'Versions::V27' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 3517,
				'EncodingModeNames::ALPHANUMERIC' => 2132,
				'EncodingModeNames::BYTES'        => 1465,
				'EncodingModeNames::KANJI'        => 902
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 2701,
				'EncodingModeNames::ALPHANUMERIC' => 1637,
				'EncodingModeNames::BYTES'        => 1125,
				'EncodingModeNames::KANJI'        => 692
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 1933,
				'EncodingModeNames::ALPHANUMERIC' => 1172,
				'EncodingModeNames::BYTES'        => 805,
				'EncodingModeNames::KANJI'        => 496
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 1501,
				'EncodingModeNames::ALPHANUMERIC' => 910,
				'EncodingModeNames::BYTES'        => 625,
				'EncodingModeNames::KANJI'        => 385
			],
		],
		'Versions::V28' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 3669,
				'EncodingModeNames::ALPHANUMERIC' => 2223,
				'EncodingModeNames::BYTES'        => 1528,
				'EncodingModeNames::KANJI'        => 940
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 2857,
				'EncodingModeNames::ALPHANUMERIC' => 1732,
				'EncodingModeNames::BYTES'        => 1190,
				'EncodingModeNames::KANJI'        => 732
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 2085,
				'EncodingModeNames::ALPHANUMERIC' => 1263,
				'EncodingModeNames::BYTES'        => 868,
				'EncodingModeNames::KANJI'        => 534
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 1581,
				'EncodingModeNames::ALPHANUMERIC' => 958,
				'EncodingModeNames::BYTES'        => 658,
				'EncodingModeNames::KANJI'        => 405
			],
		],
		'Versions::V29' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 3909,
				'EncodingModeNames::ALPHANUMERIC' => 2369,
				'EncodingModeNames::BYTES'        => 1628,
				'EncodingModeNames::KANJI'        => 1002
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 3035,
				'EncodingModeNames::ALPHANUMERIC' => 1839,
				'EncodingModeNames::BYTES'        => 1264,
				'EncodingModeNames::KANJI'        => 778
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 2181,
				'EncodingModeNames::ALPHANUMERIC' => 1322,
				'EncodingModeNames::BYTES'        => 908,
				'EncodingModeNames::KANJI'        => 559
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 1677,
				'EncodingModeNames::ALPHANUMERIC' => 1016,
				'EncodingModeNames::BYTES'        => 698,
				'EncodingModeNames::KANJI'        => 430
			],
		],
		'Versions::V30' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 4158,
				'EncodingModeNames::ALPHANUMERIC' => 2520,
				'EncodingModeNames::BYTES'        => 1732,
				'EncodingModeNames::KANJI'        => 1066
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 3289,
				'EncodingModeNames::ALPHANUMERIC' => 1994,
				'EncodingModeNames::BYTES'        => 1370,
				'EncodingModeNames::KANJI'        => 843
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 2358,
				'EncodingModeNames::ALPHANUMERIC' => 1429,
				'EncodingModeNames::BYTES'        => 982,
				'EncodingModeNames::KANJI'        => 604
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 1782,
				'EncodingModeNames::ALPHANUMERIC' => 1080,
				'EncodingModeNames::BYTES'        => 742,
				'EncodingModeNames::KANJI'        => 457
			],
		],
		'Versions::V31' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 4417,
				'EncodingModeNames::ALPHANUMERIC' => 2677,
				'EncodingModeNames::BYTES'        => 1840,
				'EncodingModeNames::KANJI'        => 1132
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 3486,
				'EncodingModeNames::ALPHANUMERIC' => 2113,
				'EncodingModeNames::BYTES'        => 1452,
				'EncodingModeNames::KANJI'        => 894
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 2473,
				'EncodingModeNames::ALPHANUMERIC' => 1499,
				'EncodingModeNames::BYTES'        => 1030,
				'EncodingModeNames::KANJI'        => 634
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 1897,
				'EncodingModeNames::ALPHANUMERIC' => 1150,
				'EncodingModeNames::BYTES'        => 790,
				'EncodingModeNames::KANJI'        => 486
			],
		],
		'Versions::V32' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 4686,
				'EncodingModeNames::ALPHANUMERIC' => 2840,
				'EncodingModeNames::BYTES'        => 1952,
				'EncodingModeNames::KANJI'        => 1201
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 3693,
				'EncodingModeNames::ALPHANUMERIC' => 2238,
				'EncodingModeNames::BYTES'        => 1538,
				'EncodingModeNames::KANJI'        => 947
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 2670,
				'EncodingModeNames::ALPHANUMERIC' => 1618,
				'EncodingModeNames::BYTES'        => 1112,
				'EncodingModeNames::KANJI'        => 684
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 2022,
				'EncodingModeNames::ALPHANUMERIC' => 1226,
				'EncodingModeNames::BYTES'        => 842,
				'EncodingModeNames::KANJI'        => 518
			],
		],
		'Versions::V33' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 4965,
				'EncodingModeNames::ALPHANUMERIC' => 3009,
				'EncodingModeNames::BYTES'        => 2068,
				'EncodingModeNames::KANJI'        => 1273
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 3909,
				'EncodingModeNames::ALPHANUMERIC' => 2369,
				'EncodingModeNames::BYTES'        => 1628,
				'EncodingModeNames::KANJI'        => 1002
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 2805,
				'EncodingModeNames::ALPHANUMERIC' => 1700,
				'EncodingModeNames::BYTES'        => 1168,
				'EncodingModeNames::KANJI'        => 719
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 2157,
				'EncodingModeNames::ALPHANUMERIC' => 1307,
				'EncodingModeNames::BYTES'        => 898,
				'EncodingModeNames::KANJI'        => 553
			],
		],
		'Versions::V34' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 5253,
				'EncodingModeNames::ALPHANUMERIC' => 3183,
				'EncodingModeNames::BYTES'        => 2188,
				'EncodingModeNames::KANJI'        => 1347
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 4134,
				'EncodingModeNames::ALPHANUMERIC' => 2506,
				'EncodingModeNames::BYTES'        => 1722,
				'EncodingModeNames::KANJI'        => 1060
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 2949,
				'EncodingModeNames::ALPHANUMERIC' => 1787,
				'EncodingModeNames::BYTES'        => 1228,
				'EncodingModeNames::KANJI'        => 756
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 2301,
				'EncodingModeNames::ALPHANUMERIC' => 1394,
				'EncodingModeNames::BYTES'        => 958,
				'EncodingModeNames::KANJI'        => 590
			],
		],
		'Versions::V35' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 5529,
				'EncodingModeNames::ALPHANUMERIC' => 3351,
				'EncodingModeNames::BYTES'        => 2303,
				'EncodingModeNames::KANJI'        => 1417
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 4343,
				'EncodingModeNames::ALPHANUMERIC' => 2632,
				'EncodingModeNames::BYTES'        => 1809,
				'EncodingModeNames::KANJI'        => 1113
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 3081,
				'EncodingModeNames::ALPHANUMERIC' => 1867,
				'EncodingModeNames::BYTES'        => 1283,
				'EncodingModeNames::KANJI'        => 790
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 2361,
				'EncodingModeNames::ALPHANUMERIC' => 1431,
				'EncodingModeNames::BYTES'        => 983,
				'EncodingModeNames::KANJI'        => 605
			],
		],
		'Versions::V36' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 5836,
				'EncodingModeNames::ALPHANUMERIC' => 3537,
				'EncodingModeNames::BYTES'        => 2431,
				'EncodingModeNames::KANJI'        => 1496
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 4588,
				'EncodingModeNames::ALPHANUMERIC' => 2780,
				'EncodingModeNames::BYTES'        => 1911,
				'EncodingModeNames::KANJI'        => 1176
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 3244,
				'EncodingModeNames::ALPHANUMERIC' => 1966,
				'EncodingModeNames::BYTES'        => 1351,
				'EncodingModeNames::KANJI'        => 832
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 2524,
				'EncodingModeNames::ALPHANUMERIC' => 1530,
				'EncodingModeNames::BYTES'        => 1051,
				'EncodingModeNames::KANJI'        => 647
			],
		],
		'Versions::V37' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 6153,
				'EncodingModeNames::ALPHANUMERIC' => 3729,
				'EncodingModeNames::BYTES'        => 2563,
				'EncodingModeNames::KANJI'        => 1577
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 4775,
				'EncodingModeNames::ALPHANUMERIC' => 2894,
				'EncodingModeNames::BYTES'        => 1989,
				'EncodingModeNames::KANJI'        => 1224
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 3417,
				'EncodingModeNames::ALPHANUMERIC' => 2071,
				'EncodingModeNames::BYTES'        => 1423,
				'EncodingModeNames::KANJI'        => 876
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 2625,
				'EncodingModeNames::ALPHANUMERIC' => 1591,
				'EncodingModeNames::BYTES'        => 1093,
				'EncodingModeNames::KANJI'        => 673
			],
		],
		'Versions::V38' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 6479,
				'EncodingModeNames::ALPHANUMERIC' => 3927,
				'EncodingModeNames::BYTES'        => 2699,
				'EncodingModeNames::KANJI'        => 1661
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 5039,
				'EncodingModeNames::ALPHANUMERIC' => 3054,
				'EncodingModeNames::BYTES'        => 2099,
				'EncodingModeNames::KANJI'        => 1292
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 3599,
				'EncodingModeNames::ALPHANUMERIC' => 2181,
				'EncodingModeNames::BYTES'        => 1499,
				'EncodingModeNames::KANJI'        => 923
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 2735,
				'EncodingModeNames::ALPHANUMERIC' => 1658,
				'EncodingModeNames::BYTES'        => 1139,
				'EncodingModeNames::KANJI'        => 701
			],
		],
		'Versions::V39' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 6743,
				'EncodingModeNames::ALPHANUMERIC' => 4087,
				'EncodingModeNames::BYTES'        => 2809,
				'EncodingModeNames::KANJI'        => 1729
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 5313,
				'EncodingModeNames::ALPHANUMERIC' => 3220,
				'EncodingModeNames::BYTES'        => 2213,
				'EncodingModeNames::KANJI'        => 1362
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 3791,
				'EncodingModeNames::ALPHANUMERIC' => 2298,
				'EncodingModeNames::BYTES'        => 1579,
				'EncodingModeNames::KANJI'        => 972
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 2927,
				'EncodingModeNames::ALPHANUMERIC' => 1774,
				'EncodingModeNames::BYTES'        => 1219,
				'EncodingModeNames::KANJI'        => 750
			],
		],
		'Versions::V40' => [
			'ErrorCorrectionLevelNames::L' => [
				'EncodingModeNames::NUMERIC'      => 7089,
				'EncodingModeNames::ALPHANUMERIC' => 4296,
				'EncodingModeNames::BYTES'        => 2953,
				'EncodingModeNames::KANJI'        => 1817
			],
			'ErrorCorrectionLevelNames::M' => [
				'EncodingModeNames::NUMERIC'      => 5596,
				'EncodingModeNames::ALPHANUMERIC' => 3391,
				'EncodingModeNames::BYTES'        => 2331,
				'EncodingModeNames::KANJI'        => 1435
			],
			'ErrorCorrectionLevelNames::Q' => [
				'EncodingModeNames::NUMERIC'      => 3993,
				'EncodingModeNames::ALPHANUMERIC' => 2420,
				'EncodingModeNames::BYTES'        => 1663,
				'EncodingModeNames::KANJI'        => 1024
			],
			'ErrorCorrectionLevelNames::H' => [
				'EncodingModeNames::NUMERIC'      => 3057,
				'EncodingModeNames::ALPHANUMERIC' => 1852,
				'EncodingModeNames::BYTES'        => 1273,
				'EncodingModeNames::KANJI'        => 784
			],
		]
	];
}
