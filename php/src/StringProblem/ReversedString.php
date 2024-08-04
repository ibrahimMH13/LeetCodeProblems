<?php 

namespace IbrahimMH\LeetCode\Solution\StringProblem;


# Easy
class ReversedString{



	public function getReversedString(string $txt){
		$string = '';

		for ($i= strlen($txt) -1 ; $i >= 0; $i--) { 
			$string .= $txt[$i];
		}
		return $string;
	}
}