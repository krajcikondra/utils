<?php

use Tester\Assert;

require __DIR__ . '/../vendor/autoload.php';

class StringTestCase extends \Tester\TestCase
{


	public function setUp()
	{
		\Tester\Environment::setup();
	}

	public function testFirstCharacterLower()
	{
		$output = \Helbrary\Utils\Strings::firstCharacterLower('HELLO');
		Assert::same('hELLO', $output);
		$output = \Helbrary\Utils\Strings::firstCharacterLower('Hello');
		Assert::same('hello', $output);
		$output = \Helbrary\Utils\Strings::firstCharacterLower('hello');
		Assert::same('hello', $output);
		$output = \Helbrary\Utils\Strings::firstCharacterLower('4Hello');
		Assert::same('4Hello', $output);
	}





}

$testCase = new StringTestCase();
$testCase->run();