<?php declare( strict_types = 1 );
namespace CodeKandis\QrCodeGenerator;

/**
 * Represents an alphanumeric character set.
 * @package codekandis/qr-code-generator
 * @author Christian Ramelow <info@codekandis.net>
 */
class AlphanumericCharacterSet extends AbstractCharacterSet
{
	/**
	 * {@inheritDoc}
	 */
	public const VALID_CHARACTERS = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ $%*+-./:';
}
