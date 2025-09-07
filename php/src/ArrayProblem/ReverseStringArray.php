<?php


namespace IbrahimMH\LeetCode\Solution\ArrayProblem;



class ReverseStringArray{



	public function reverse(&$list){

		$left = 0;
        $right = count($list) - 1;

        while($left < $right){

            $temp = $list[$left];
            $list[$left] = $list[$right];
            $list[$right] =  $temp;

            $left++;
            $right--;
        }
	}
}