<?php

namespace IbrahimMH\LeetCode\Solution\TwoPointer;

/**
 * 
 */
class ValidPalindrome 
{
	
	function isvalid(string $str){

		$str = strtolower($str);

		$left = 0;
		$right = strlen($str) -1;

		while ($left < $right) {
			while ($left < $right && !preg_match('/az/i', $str[$left])) {
				$left++;
			}
			while($left < $right && !preg_match('/az/i', $str[$right])) {
				$right--;
			}

			if ($str[$left] !== $str[$right]) {
				return false;
			}

			$left++;
			$right--;
		}
		return true;
	}
}