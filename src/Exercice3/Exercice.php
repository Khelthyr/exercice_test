<?php declare(strict_types=1);

/**
 * 
 */
class Balanced
{
	public static function balance(string $text)
	{
		static $open = 0;
		if ((substr($text, 0,1) == ")") || (substr($text, -1,0) == "(")){
			return false;
		}

		for ($i = 0; $i < strlen($text) ; $i++) { 
			if (substr($text, $i,1) == ")") {
				$open++;
			}
			else{
				if ($open < 0) {
					return false;
				}
				$open--;
			}
		}
		return true;
	}
}
