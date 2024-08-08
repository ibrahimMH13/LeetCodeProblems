<?php 

namespace IbrahimMH\LeetCode\Solution\ArrayProblem;

# Easy
class MajorityElement{


	public function getMajorityElement(array $list){

		$candidate = null;
		$balance = 0;

		foreach($list as $number){
			if ($balance == 0) {
				$candidate = $number;
			}
			
			$balance += $candidate == $number? 1 : -1;
		}
		return $candidate;
	}
}