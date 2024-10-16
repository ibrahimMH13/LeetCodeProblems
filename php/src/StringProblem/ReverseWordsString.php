<?php


namespace IbrahimMH\LeetCode\Solution\StringProblem;


class ReverseWordsString{


	public function reverse($s){

			$cleanStr = trim($s);

			$words = array_filter(explode(" ",$cleanStr),fn($w)=> $w != "");
			
			$reorder = array_reverse($words);
			
			return implode(" ", $reorder);
	}
}