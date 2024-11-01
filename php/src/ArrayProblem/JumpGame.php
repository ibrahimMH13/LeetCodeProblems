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


    public function canV2($list){

        $steps = 0;

        for ($i=0; $i < count($list); $i++) { 
            
            if($i > $step) return false;
            
            $steps = max($i, $i + $list[$i]);

            if ($steps > count($length -1)) return true;
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


    public function getMinStepsV2(array $list)
    {
        $steps = 0;
        $maxJump = 0;
        $currentJumpEnd = 0;
        $length = count($list);

        if ($length <=1) return 0;

        for ($i=0; $i < $length; $i++) { 
            
            $maxJump = max($maxJump,$i + $list[$i]);

            if ($i === $currentJumpEnd) {
              $steps++;
              $currentJumpEnd =$maxJump;
            }

            if ($steps >= $length -1) return $steps;
        }
    }

}