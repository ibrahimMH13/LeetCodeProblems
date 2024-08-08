<?php 

namespace IbrahimMH\LeetCode\Solution\ArrayProblem;

# Easy
class MajorityElement{


	public function getMajorityElement(array $list){

		$candidate = null;
		$counter = 0;

		foreach($list as $number){
			if ($counter == 0) {
				$candidate = $number;
			}
			$counter += $candidate == $number? 1 : -1;
		}
		return $candidate;
	}
}