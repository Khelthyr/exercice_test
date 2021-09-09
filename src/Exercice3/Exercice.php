<?php declare(strict_types=1);

/**
 * 
 */
class Balanced
{
	public static function balance(string $text)
	{
		$open = 0;
		for ($i = 0; $i < strlen($text) ; $i++) {
			var_dump($open); 
			if (substr($text, $i, 1) == "(") {
				$open+=1;
			}
			elseif (substr($text, $i, 1) == ")") {
				$open-=1;
				if ($open < 0) {
					return false;
				}
			}
			else {
				if ($open < 0) {
					return false;
				}
			}
		}
		if ($open === 0) {
			return true;
		}
	}
}