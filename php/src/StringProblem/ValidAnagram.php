<?php

namespace IbrahimMH\LeetCode\Solution\StringProblem;

class ValidAnagram{

	public function is(string $txt,string $string){

        $n = strlen($txt);
        $stack = [];
        if($n !== strlen($string)){
            return false;
        }

        for($i = 0; $i< $n; $i++){
            
            if(!isset($stack[$txt[$i]])){
                $stack[$txt[$i]] = 1;
            }else{
                $stack[$txt[$i]] = ++ $stack[$txt[$i]];
            }
        }

        for($i=0; $i <$n; $i++){
            if(!isset($stack[$string[$i]])){
                return false;
            }else{
                --$stack[$string[$i]];
                if($stack[$string[$i]] === 0){
                    unset($stack[$string[$i]]);
                }
            }
        }

        return empty($stack);


    }


}