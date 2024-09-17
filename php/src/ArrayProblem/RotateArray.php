<?php


namespace IbrahimMH\LeetCode\Solution\ArrayProblem;



class RotateArray{


	 function reverse(&$nums,$start, $end){

		while($start < $end){

			$temp = $nums[$start];

			$nums[$start] = $nums[$end];

			$nums[$end] = $temp;

			$start++;

			$end--;
		}
	}
	public function rotate(&$nums, $k){

		$n = count($nums);

		$k = $k % $n;

		// reverse entier list
		 $this->reverse($nums,0 ,$n -1);
		 // align and fix roation to k step
		 $this->reverse($nums,0, $k - 1);
		 // moveforawred rest of array
		 $this->reverse($nums,$k , $n -1);
	}
}