<?php

namespace Helbrary\Utils;

use Nette\Object;

class Validator extends Object
{

	/**
	 * Is string post code?
	 * @param string $string
	 * @return bool
	 */
	public static function isPostCode($string)
	{
		return (bool)preg_match('^([1-9]\d{4}|\d{3} \d{2})^', $string);
	}

	/**
	 * Is phone number? accept formats: '123 456 789' or '123456789'
	 * @param string $string
	 * @return bool
	 */
	public static function isPhoneNumber($string)
	{
		return (bool)preg_match('^([1-9]\d{8}|\d{3} \d{3} \d{3})^', $string);
	}
}