<?php declare(strict_types=1);

/**
 * 
 */
class PrimeFactors
{
	// public static function isPrime(int $n)
	// {
	// 	if ($n == 1 ) {
	// 		return 0;
	// 	}
	// 	for($i=2; $i <= $n/2; $i++)
	// 	{
	// 		if($n % $i == 0){
	// 			return 0;
	// 		}
	// 	}
	// 	return 1;
	// }

	public static function generate(int $n)
	{
		$tableau = [];

		for ($i = 2; $n > 1; $i++)
		{
			for (; $n % $i == 0; $n /= $i)
			{
				$tableau[] = $i;
			}
		}

		return $tableau;
	}
}
