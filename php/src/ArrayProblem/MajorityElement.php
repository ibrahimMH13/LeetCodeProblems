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


	public function getMajorityElementV2(array $list){

		$candidate = null;
		$balance = 0;

		for ($i=0; $i < count($list); $i++) { 
			
			if ($balance <= 0) {
				$candidate = $list[$i];
				$balance = 0;
			}
			$balance += $candidate == $list[$i]? 1 : -1;
		}

		return $candidate;
	}
}