<?php
namespace Kir\PostCodes;

class PostCodesTest extends \PHPUnit_Framework_TestCase {
	public function testIcuToPost() {
		$translator = new PostCodeTranslator();
		$this->assertEquals('BE', $translator->getIso3166CodeFromPostCode('B'));
		$this->assertEquals('DK', $translator->getIso3166CodeFromPostCode('DK'));
		$this->assertEquals('DE', $translator->getIso3166CodeFromPostCode('D'));
		$this->assertEquals('GR', $translator->getIso3166CodeFromPostCode('GR'));
		$this->assertEquals('ES', $translator->getIso3166CodeFromPostCode('E'));
		$this->assertEquals('FR', $translator->getIso3166CodeFromPostCode('F'));
		$this->assertEquals('IE', $translator->getIso3166CodeFromPostCode('IRL'));
		$this->assertEquals('IT', $translator->getIso3166CodeFromPostCode('I'));
		$this->assertEquals('LU', $translator->getIso3166CodeFromPostCode('L'));
		$this->assertEquals('NL', $translator->getIso3166CodeFromPostCode('NL'));
		$this->assertEquals('AT', $translator->getIso3166CodeFromPostCode('A'));
		$this->assertEquals('PT', $translator->getIso3166CodeFromPostCode('P'));
		$this->assertEquals('FI', $translator->getIso3166CodeFromPostCode('FIN'));
		$this->assertEquals('SE', $translator->getIso3166CodeFromPostCode('S'));
		$this->assertEquals('UK', $translator->getIso3166CodeFromPostCode('GB'));
		$this->assertEquals('IS', $translator->getIso3166CodeFromPostCode('IS'));
		$this->assertEquals('LI', $translator->getIso3166CodeFromPostCode('FL'));
		$this->assertEquals('NO', $translator->getIso3166CodeFromPostCode('N'));
		$this->assertEquals('CZ', $translator->getIso3166CodeFromPostCode('CZ'));
		$this->assertEquals('SK', $translator->getIso3166CodeFromPostCode('SK'));
		$this->assertEquals('PL', $translator->getIso3166CodeFromPostCode('PL'));
		$this->assertEquals('HU', $translator->getIso3166CodeFromPostCode('H'));
		$this->assertEquals('EE', $translator->getIso3166CodeFromPostCode('EST'));
		$this->assertEquals('LV', $translator->getIso3166CodeFromPostCode('LV'));
		$this->assertEquals('LT', $translator->getIso3166CodeFromPostCode('LT'));
		$this->assertEquals('SI', $translator->getIso3166CodeFromPostCode('SLO'));
		$this->assertEquals('RO', $translator->getIso3166CodeFromPostCode('RO'));
		$this->assertEquals('BG', $translator->getIso3166CodeFromPostCode('BG'));
		$this->assertEquals('CY', $translator->getIso3166CodeFromPostCode('CY'));

	}

	public function testPostToIcu() {
		$translator = new PostCodeTranslator();
		$this->assertEquals('A', $translator->getPostCodeFromIso3166('AT'));
		$this->assertEquals('B', $translator->getPostCodeFromIso3166('BE'));
		$this->assertEquals('BG', $translator->getPostCodeFromIso3166('BG'));
		$this->assertEquals('CH', $translator->getPostCodeFromIso3166('CH'));
		$this->assertEquals('CY', $translator->getPostCodeFromIso3166('CY'));
		$this->assertEquals('CZ', $translator->getPostCodeFromIso3166('CZ'));
		$this->assertEquals('D', $translator->getPostCodeFromIso3166('DE'));
		$this->assertEquals('DK', $translator->getPostCodeFromIso3166('DK'));
		$this->assertEquals('EST', $translator->getPostCodeFromIso3166('EE'));
		$this->assertEquals('E', $translator->getPostCodeFromIso3166('ES'));
		$this->assertEquals('FIN', $translator->getPostCodeFromIso3166('FI'));
		$this->assertEquals('F', $translator->getPostCodeFromIso3166('FR'));
		$this->assertEquals('GB', $translator->getPostCodeFromIso3166('GB'));
		$this->assertEquals('GR', $translator->getPostCodeFromIso3166('GR'));
		$this->assertEquals('HR', $translator->getPostCodeFromIso3166('HR'));
		$this->assertEquals('H', $translator->getPostCodeFromIso3166('HU'));
		$this->assertEquals('IRL', $translator->getPostCodeFromIso3166('IE'));
		$this->assertEquals('IS', $translator->getPostCodeFromIso3166('IS'));
		$this->assertEquals('I', $translator->getPostCodeFromIso3166('IT'));
		$this->assertEquals('FL', $translator->getPostCodeFromIso3166('LI'));
		$this->assertEquals('LT', $translator->getPostCodeFromIso3166('LT'));
		$this->assertEquals('L', $translator->getPostCodeFromIso3166('LU'));
		$this->assertEquals('LV', $translator->getPostCodeFromIso3166('LV'));
		$this->assertEquals('MC', $translator->getPostCodeFromIso3166('MC'));
		$this->assertEquals('M', $translator->getPostCodeFromIso3166('MT'));
		$this->assertEquals('NL', $translator->getPostCodeFromIso3166('NL'));
		$this->assertEquals('N', $translator->getPostCodeFromIso3166('NO'));
		$this->assertEquals('PK', $translator->getPostCodeFromIso3166('PK'));
		$this->assertEquals('PL', $translator->getPostCodeFromIso3166('PL'));
		$this->assertEquals('P', $translator->getPostCodeFromIso3166('PT'));
		$this->assertEquals('RO', $translator->getPostCodeFromIso3166('RO'));
		$this->assertEquals('RUS', $translator->getPostCodeFromIso3166('RU'));
		$this->assertEquals('S', $translator->getPostCodeFromIso3166('SE'));
		$this->assertEquals('SLO', $translator->getPostCodeFromIso3166('SI'));
		$this->assertEquals('SK', $translator->getPostCodeFromIso3166('SK'));
		$this->assertEquals('UA', $translator->getPostCodeFromIso3166('UA'));
	}
}
