<?php


namespace IbrahimMH\LeetCode\Solution\StringProblem;


# Easy
class RomanToInteger{



	public function convertRomanToInteger(string $romain){
			
			$mapper = [
					'I'   => 1,
					'V'   => 5,
					'X'   => 10,
					'L'   => 50,
					'C'   => 100,
					'D'   => 500,
					'M'   => 1000
				];
			$return = 0;
			$length = strlen($romain) - 1;

			for ($i=0; $i <= $length; $i++) { 
				$current = $mapper[$romain[$i]];
				$next = $i < $length ? $mapper[$romain[$i + 1] ] : 0;
				if ($current < $next) {
					$return -= $current;
				}else{
					$return += $current;
				}
			}
					
			return $return;		
	}
}