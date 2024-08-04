<?php

namespace IbrahimMH\LeetCode\Solution\ArrayProblem;


#Easy
class TwoSum{
	
    public function getTwoNumbers(array $array , $target){
    	$bag = [];
        for($i=0; $i< count($array); $i++){
            $reslut = $target - $array[$i];
            if (isset($bag[$reslut])) {
                return [$bag[$reslut], $i];
            }else{
                $bag[$array[$i]] = $i;
            }
        }
        return [];
    }
}

