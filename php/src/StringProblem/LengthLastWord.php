<?php

namespace IbrahimMH\LeetCode\Solution\StringProblem;


class LengthLastWord{


	public function getLength(string $string){

		$count = 0;

		for($i= strlen($string) -1; $i >=0; $i--){

				if ($string[$i] == ' ') break;

				$count++;
		}

		return $count;
	}
}