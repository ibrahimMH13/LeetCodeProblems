<?php

namespace IbrahimMH\LeetCode\Solution\ArrayProblem;


class Candy{

	#HARD
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


	public function getMinCandyV2($rates){

		$candies = array_fill(0,count($rates),1);

		for($i=1; $i < count($rates); $i++){
			if($rates[$i] > $rates[$i -1]){
				$candies[$i] = $candies[$i - 1] + 1;
			}
		}

		for ($i= count($rates) -2; $i >=0; $i--) { 
			
			if($rates[$i] > $rates[$i+1]){
				$candies[$i] = max($candies[$i],$candies[$i + 1] + 1);
			}
		}

		return array_sum($candies);
	}
}