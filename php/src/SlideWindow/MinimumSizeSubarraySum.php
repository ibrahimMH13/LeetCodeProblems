<?php

namespace IbrahimMH\LeetCode\Solution\SlideWindow;


class MinimumSizeSubarraySum{

    #medium
    public function get(array $list,int $traget): int{

       $start = 0;
              
       $minLength = count($list) + 1;

       $sum = 0;

       for($end=0; $end< count($list); $end++){
            $sum += $list[$end];
            while($sum >= $traget){

               $minLength = min($minLength, $end - $start + 1);

                $sum -= $list[$start];
                
                $start++;
            }
       }

      return $minLength <= count($list) ? $minLength : 0;
       ;

    }
}