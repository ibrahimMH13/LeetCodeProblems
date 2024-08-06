<?php

namespace IbrahimMH\LeetCode\Solution\ArrayProblem;


class MaxNumberInInstedArray{


	public function getMaxNumberInInstedArray(array $array){
			$max = 0;
			foreach ($array as $item) {
				if (is_array($item)) {
					$max = $this->getMaxNumberInInstedArray($item);
				}else{
					$max = max($max,$item);
				}
			}
			return $max;
	}
}