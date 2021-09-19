<?php declare( strict_types = 1 );
namespace CodeKandis\QrCodeGenerator;

use RuntimeException;

/**
 * Represents an exception if a character to encode is invalid.
 * @package codekandis/qr-code-generator
 * @author Christian Ramelow <info@codekandis.net>
 */
class InvalidCharacterException extends RuntimeException
{
}
