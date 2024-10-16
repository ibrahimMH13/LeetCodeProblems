<?php


namespace IbrahimMH\LeetCode\Solution\StringProblem;

class ReverseString{


	public function getReverseString(string $str){

		$string = explode(" ", $str);

		$str = "";
		for ($i= count($string) - 1; $i >=0; $i--) { 
			
			$string .= $string[$i];

		}

		return $string;
	}
}