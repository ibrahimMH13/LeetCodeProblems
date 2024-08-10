<?php

namespace IbrahimMH\LeetCode\Solution\ArrayProblem;


class SimpleBinarySearch{


	public function getIndex(array $list,int $target){

		$left = 0;
		$right = count($list) - 1;
		

		while ($left <= $right) {
			$mid = $left  + ($right - $left);
			if ($list[$mid] === $target) return $mid;
			if ($list[$mid] < $target) {
				$left = $mid + 1;
			}else{
				$right = $mid - 1;
			}
		}

		return -1;
	}
}