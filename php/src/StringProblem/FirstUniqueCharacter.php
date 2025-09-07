<?php


namespace IbrahimMH\LeetCode\Solution\StringProblem;


# Easy
class FirstUniqueCharacter{



	public function find(string $s){
        
        $stack = [];
        $freq = [];
        $length = strlen($s);
        
        for($i = 0; $i < $length; $i++){
            if(isset($stack[$s[$i]])){
                $freq[$s[$i]] = ($freq[$s[$i]])+1;
            }else{
                $stack[$s[$i]] = $i;
                $freq[$s[$i]] = 1;
            }
        }

        for($i=0;$i < $length;$i++){
            if($freq[$s[$i]] ===1) return $i;
        }

        return -1;
	}
}