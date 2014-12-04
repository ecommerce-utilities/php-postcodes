<?php
namespace Kir\PostCodes;

class PostCodeTranslator {
	/**
	 * @var string[]|null
	 */
	private static $postCodeList = null;

	/**
	 * @var string[]|null
	 */
	private static $icuCodeList = null;

	/**
	 */
	public function __construct() {
	}

	/**
	 * @param string $postCode Post-code
	 * @return string ISO 3166-2 Code
	 */
	public function getPostCodeFromIso3166($postCode) {
		if(self::$icuCodeList === null)  {
			self::$icuCodeList = require __DIR__ . '/../codes/icucodes-to-postcodes.php';
		}
		if(array_key_exists($postCode, self::$icuCodeList)) {
			return self::$icuCodeList[$postCode];
		}
		throw new CountryNotFoundException(sprintf("Country %s not found in post-code-list", $postCode));
	}

	/**
	 * @param string $icuCode ISO 3166-2 Code
	 * @return string Post-code
	 */
	public function getIso3166CodeFromPostCode($icuCode) {
		if(self::$postCodeList === null)  {
			self::$postCodeList = require __DIR__ . '/../codes/postcodes-to-icucodes.php';
		}
		if(array_key_exists($icuCode, self::$postCodeList)) {
			return self::$postCodeList[$icuCode];
		}
		throw new CountryNotFoundException(sprintf("Country %s not found in post-code-list", $icuCode));
	}
}