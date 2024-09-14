<?php


namespace IbrahimMH\LeetCode\Solution\ArrayProblem;


class RemoveDuplicatesSorted{



	public function removeDuplicate(&$nums){

		$writerP = 0;
		
		for($reader =1; $reader < count($nums); $reader++){

			if($nums[$reader] != $nums[$writerP]){
				
				$writerP++;
				
				$nums[$writerP] = $nums[$reader];
			}

		}

		return $writerP + 1;
	}
}