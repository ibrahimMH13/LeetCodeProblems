<?php

namespace IbrahimMH\LeetCode\Solution\ArrayProblem;

class JumpGame{


    function can($nums) {
        $step = 0;
        $length = count($nums) - 1;
        for($i=0;$i < count($nums); $i++){
            if($i > $step){
                return false;
            }

            $step = max($step,$i + $nums[$i]);

            if($step >= $length){
                return true;
            }
        }
    }

}