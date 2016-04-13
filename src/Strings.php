<?php

namespace Helbrary\Utils;

use Nette\Object;
use \Nette\Utils\Strings as NStrings;

class Strings extends Object
{

	/**
	 * Convert first character to lower case.
	 * @param string $s
	 * @return string
	 */
	public static function firstCharacterLower($s)
	{
		return NStrings::lower(NStrings::substring($s, 0, 1)) . NStrings::substring($s, 1);
	}

}