<?php declare( strict_types = 1 );
namespace CodeKandis\QrCodeGenerator;

use function sprintf;
use function strlen;
use function strpos;

/**
 * Represents the base class of any character set.
 * @package codekandis/qr-code-generator
 * @author Christian Ramelow <info@codekandis.net>
 */
abstract class AbstractCharacterSet implements CharacterSetInterface
{
	/**
	 * Represents the error message if a character is invalid.
	 * @var string
	 */
	protected const ERROR_INVALID_CHARACTER = 'The character `%s` is invalid.';

	/**
	 * Represents the list of allowed valid in the character set.
	 * @var string
	 */
	public const VALID_CHARACTERS = '';

	/**
	 * {@inheritDoc}
	 */
	public function getNumericValue( string $character ): int
	{
		if ( 1 !== strlen( $character ) )
		{
			throw new InvalidCharacterException(
				sprintf(
					static::ERROR_INVALID_CHARACTER,
					$character
				)
			);
		}

		$numericValue = strpos( static::VALID_CHARACTERS, $character );

		if ( false === $numericValue )
		{
			throw new InvalidCharacterException(
				sprintf(
					static::ERROR_INVALID_CHARACTER,
					$character
				)
			);
		}

		return $numericValue;
	}
}
