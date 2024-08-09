<?php


namespace IbrahimMH\LeetCode\Solution\ArrayProblem;


class MoveZeros{


	public function MoveZeros(array &$list){
		   $noneZeroIndex = 0;

		   for ($i=0; $i < count($list); $i++) { 
		   		if ($list[$i] != 0) {$temp =
		   			$temp = $list[$noneZeroIndex]; 
		   			$list[$noneZeroIndex] = $list[$i];
		   			$list[$i] = $temp;
		   			$noneZeroIndex++;
		   		}
		   }
	}
}