<?php declare(strict_types=1);

/**
 * 
 */
class Bissexctile
{
	public static function isBissexctile(int $annee)
	{
		if ($annee % 400 == 0)
	      return true;
	   	if ($annee % 4 == 0)
	      return true;
	   	else if ($annee % 100 == 0)
	      return false;
	  	else
	      return false;
	}
}
