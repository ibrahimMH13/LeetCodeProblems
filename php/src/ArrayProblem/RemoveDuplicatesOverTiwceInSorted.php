<?php


namespace IbrahimMH\LeetCode\Solution\ArrayProblem;


class RemoveDuplicatesOverTiwceInSorted{


	public function RemoveDuplicates(&$nums){

		$writer = 1;

		for ($reader=2; $reader < count($nums) ; $reader++) { 
					
					if ($nums[$reader] != $nums[$writer - 1]) {

						$writer++;

						$nums[$writer] = $nums[$reader];
					}
		}

		return ++$writer;
	}

}