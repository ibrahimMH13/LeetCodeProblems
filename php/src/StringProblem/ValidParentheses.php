<?php

namespace IbrahimMH\LeetCode\Solution\StringProblem;


# Easy
class ValidParentheses{
	
	
	 public function getValidParentheses(string $txt){
	 		$mapper = ['(' => ')',
					   '[' => ']',
					   '{' => '}'
					];
		   $stack = [];

	 	$closedMapper = array_flip($mapper);
	 		for ($i=0; $i <= strlen($txt) -1; $i++) { 
	 			$char = $txt[$i];
	 			if (isset($mapper[$char])) {
	 				$stack[] = $char; 
	 			}elseif (isset($closedMapper[$char])){
	 				$lastItem = array_pop($stack);
	 				if ($mapper[$lastItem] !== $char) return false;
	 			}
	 		}
	 		return empty($stack);
	 }
}