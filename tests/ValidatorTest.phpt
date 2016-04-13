<?php

use Tester\Assert;

require __DIR__ . '/../vendor/autoload.php';

class ValidatorTestCase extends \Tester\TestCase
{


	public function setUp()
	{
		\Tester\Environment::setup();
	}

	public function testFirstCharacterLower()
	{
		Assert::true(\Helbrary\Utils\Validator::isPostCode(92364));
		Assert::true(\Helbrary\Utils\Validator::isPostCode('703 64'));
		Assert::false(\Helbrary\Utils\Validator::isPostCode('1 23 64'));
		Assert::false(\Helbrary\Utils\Validator::isPostCode('1 23 64'));
		Assert::false(\Helbrary\Utils\Validator::isPostCode('hello'));
	}

	public function testPhoneNumber()
	{
		Assert::true(\Helbrary\Utils\Validator::isPhoneNumber('123 456 789'));
		Assert::true(\Helbrary\Utils\Validator::isPhoneNumber('999888777'));
		Assert::false(\Helbrary\Utils\Validator::isPhoneNumber('hello'));
		Assert::false(\Helbrary\Utils\Validator::isPhoneNumber('aaa bbb ccc'));
		Assert::false(\Helbrary\Utils\Validator::isPhoneNumber('aaabbbccc'));
		Assert::false(\Helbrary\Utils\Validator::isPhoneNumber('1 2 3 4 5 6 7 8 9'));
		Assert::false(\Helbrary\Utils\Validator::isPhoneNumber('12345678'));
	}




}

$testCase = new ValidatorTestCase();
$testCase->run();