<?php

namespace IbrahimMH\LeetCode\Solution\ArrayProblem;

class JumpGame{


	public function can($list){

		$steps = 0;
		$length = count($list) - 1;

		for ($i=0; $i <= $length; $i++) { 
			
			if ($i > $steps) {

				return false;
			}

			$steps = max($steps, ($i + $list[$i]));

			if ($steps >= $length) {
				return true;
			}
		}
		return false;
	}

}