<?php
namespace Kir\PostCodes;

class PostCodeProvider {
	/** @var string[] */
	private static $postCodeToIcuCodeList;
	/** @var string[] */
	private static $icuCodeToPostCodeList;
	/** @var string[] */
	private static $icuCodeList;
	
	public function __construct() {}
	
	/**
	 * @return array
	 */
	public function getAllIcuCodes() {
		if(self::$icuCodeList === null)  {
			self::$icuCodeList = array_keys($this->getIcuCodesToPostcodes());
		}
		return self::$icuCodeList;
	}
	
	/**
	 * @return array
	 */
	public function getAllPostCodes() {
		if(self::$icuCodeList === null)  {
			self::$icuCodeList = array_keys($this->getPostcodesToIcuCodes());
		}
		return self::$icuCodeList;
	}
	
	/**
	 * @param string $postCode Post-code
	 * @return string ISO 3166-2 Code
	 */
	public function getPostCodeFromIso3166($postCode) {
		if(array_key_exists($postCode, self::$icuCodeToPostCodeList)) {
			return self::$icuCodeToPostCodeList[$postCode];
		}
		throw new CountryNotFoundException(sprintf('Country %s not found in post-code-list', $postCode));
	}
	
	/**
	 * @param string $icuCode ISO 3166-2 Code
	 * @return string Post-code
	 */
	public function getIso3166CodeFromPostCode($icuCode) {
		if(self::$postCodeToIcuCodeList === null)  {
			self::$postCodeToIcuCodeList = require dirname(__DIR__) . '/codes/postcodes-to-icucodes.php';
		}
		if(array_key_exists($icuCode, self::$postCodeToIcuCodeList)) {
			return self::$postCodeToIcuCodeList[$icuCode];
		}
		throw new CountryNotFoundException(sprintf('Country %s not found in post-code-list', $icuCode));
	}
	
	/**
	 * @return string[]
	 */
	public function getIcuCodesToPostcodes() {
		if(self::$icuCodeToPostCodeList === null)  {
			self::$icuCodeToPostCodeList = require dirname(__DIR__) . '/codes/icucodes-to-postcodes.php';
		}
		return self::$icuCodeToPostCodeList;
	}
	
	/**
	 * @return string[]
	 */
	public function getPostcodesToIcuCodes() {
		if(self::$postCodeToIcuCodeList === null)  {
			self::$postCodeToIcuCodeList = require dirname(__DIR__) . '/codes/postcodes-to-icucodes.php';
		}
		return self::$postCodeToIcuCodeList;
	}
}