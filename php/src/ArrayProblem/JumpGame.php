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

    function getMinSteps($list){

        $steps = 0;
        $maxJump = 0;
        $currentJumpEnd = 0;
        $length = count($list);
       
       if($length <= 1) return 0;

       for ($i=0; $i < $length; $i++) { 
         
            $maxJump = max($maxJump,($i + $list[$i]));

            if ($i == $currentJumpEnd) {
                $steps++;
                $currentJumpEnd = $maxJump;
            }

            if($currentJumpEnd >= $length -1){
                return $steps;
            }

       }
    }

}