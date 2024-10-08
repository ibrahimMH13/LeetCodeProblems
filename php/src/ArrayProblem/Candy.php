<?php

namespace IbrahimMH\LeetCode\Solution\ArrayProblem;


class Candy{


	public function getMin($rates){

		$length = count($rates);

		
		$candies = array_fill(0, $length, 1);

		for ($i=1; $i < $length; $i++) { 
			
			if($rates[$i] > $rates[$i - 1]){

				$candies[$i] = $candies[$i - 1] + 1;	

			}

		}

		for($i = $length - 2; $i >=0;$i--){
			
			if($rates[$i] > $rates[$i + 1]){

				$candies[$i] = max($candies[$i],$candies[$i + 1] + 1);	

			}

		}

		return array_sum($candies);
	}
}