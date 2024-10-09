<?php

namespace IbrahimMH\LeetCode\Solution\ArrayProblem;


class TrappingRainWater{



	public function calculate($height){

		$left = 0;

		$right = count($height) - 1;

		$maxLeft = 0;

		$maxRight = 0;

		$totalWater = 0;

		while($left <= $right){


			if ($height[$left] < $height[$right]) {
				if ($height[$left] >= $maxLeft) {
					$maxLeft = $height[$left];
				}else{
					$totalWater += $maxLeft - $height[$left];
				}
				$left++;

			}else{

				if ($height[$right] >= $maxRight) {
				
					$maxRight = $height[$right];
			
				}else{

					$totalWater += $maxRight - $height[$right];
				}
				$right--;
			}

		}
		return $totalWater;
	}
}