<?php


namespace IbrahimMH\LeetCode\Solution\ArrayProblem;


# Easy
class PascalTriangle{


	public function generate(int $numberRaw){
		$triangle = [];

		for ($i=0; $i <= $numberRaw; $i++){ 
			for ($j=0; $j <= $i ; $j++) {
				if ($j == 0 || $j == $i) {
				 	$triangle[$i][$j] = 1;
				 } else{
				 	$triangle[$i][$j] = ($triangle[$i - 1][$j]) + ($triangle[$i - 1][$j - 1]) ;
				 }
				
			}
		}
		return $triangle;
	}

}