<?php

namespace IbrahimMH\LeetCode\Solution\TwoPointer;


class IsSubsequence{


	public function is(string $str, string $txt){

		$i = 0;

		$j = 0;

		while($i < strlen($txt)){

			if ($j < strlen($str) && $str[$j] === $txt[$i]) {

				$j++;
			}

			$i++;
			
		}

		return $j;
	}
}