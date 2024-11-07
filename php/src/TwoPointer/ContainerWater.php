<?php

namespace IbrahimMH\LeetCode\Solution\TwoPointer;

class ContainerWater{

    public function calculateArea(array $list){

        $left = 0;
        $right = count($list) - 1;
        $maxArea = 0;

        while($left < $right){

            $area = min($list[$left],$list[$right]) *( $right - $left);
            $maxArea = max($maxArea,$area);

            if($list[$left] < $list[$right]){
                $left++;
            }else{
                $right--;
            }


        }
        return $maxArea;
    }
}