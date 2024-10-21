<?php

namespace IbrahimMH\LeetCode\Solution\StringProblem;

class FindIndex{


	public function getIndex(string $str,string $needle){

		if (empty($str)){
		
			return -1;
		
		} 

		for ($i=0; $i < strlen($str) - strlen($needle) + - 1; $i++) { 
			if(substr($str, $i,strlen($needle)) === $needle){

				return $i;
			}	
		}

		return -1;

	}
}