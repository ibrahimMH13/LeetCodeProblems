<?php

namespace IbrahimMH\LeetCode\Solution\ArrayProblem;



class RemoveTargetElement{



	public function removeElement(&$list, $target){

		$writer = 0;
		for ($reader=0; $reader < count($list); $reader++) { 
			
			if ($list[$reader] != $target) {

				$list[$writer] = $list[$reader];
				$writer++;
			}

		}
		return $writer;

	}
}