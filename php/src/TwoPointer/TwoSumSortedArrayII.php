<?php

namespace IbrahimMH\LeetCode\Solution\TwoPointer;


class TwoSumSortedArrayII{

    public function getTwoNumber(array $array,int $target){

        $left = 0 ;
        $right = count($array) - 1;

        while($left <= $right){

            $total = $array[$left] + $array[$right];

            if($total == $target){
                return [$left+1,$right+1];
            }

            if($total > $target){
                $right--;
            }else{
                $left++;
            }
        }
        return [];
    }
}