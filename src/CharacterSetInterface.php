<?php declare( strict_types = 1 );
namespace CodeKandis\QrCodeGenerator;

/**
 * Represents the interface of any character set.
 * @package codekandis/qr-code-generator
 * @author Christian Ramelow <info@codekandis.net>
 */
interface CharacterSetInterface
{
	/**
	 * Gets the numeric value of a specific character.
	 * @param string $character The character to get its numeric value.
	 * @return int The numeric value of the character.
	 * @throws InvalidCharacterException The character is invalid.
	 */
	public function getNumericValue( string $character ): int;
}
