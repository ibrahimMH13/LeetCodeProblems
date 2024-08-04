<?php

namespace IbrahimMH\LeetCode\Solution\StringProblem;



class LongestCommonPrefix{


	public function getLongestCommonPrefix(array $list){

		$prefix = null;

		foreach ($list as $word) {
			if (is_null($prefix) || strlen($word) < strlen($prefix)) {
				$prefix = $word;
			}
		}

		foreach($list as $word){
			for ($i=0; $i <= strlen($prefix) - 1; $i++) { 
					if ($word[i] != $prefix[$i]) {
						$prefix = substr($word,0, $i);
					}
			}
		}

		return $prefix;
	}
}