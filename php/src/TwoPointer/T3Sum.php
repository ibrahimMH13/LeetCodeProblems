<?php

namespace IbrahimMH\LeetCode\Solution\TwoPointer;

class T3Sum{

	public function get(array $list){

		sort($list);

		$result = [];


		for($i=0; $i< count($list); $i++){

			# skip ele if prev is same current ele
			if ($i > 0 && $list[$i] == $list[$i - 1]) {
				
				continue;
			}

			$left = $i + 1;
			
			$right = count($list) - 1;

			while($left < $right){

				$total = $list[$i] + $list[$left] + $list[$right];
				
				if ($total < 0) {

					$left++;

				}elseif ($total > 0) {

					$right--;

				}else{

					while($left < $right && $list[$left] == $list[$left + 1]){
						$left++;
					}

					while($left < $right && $list[$right] == $list[$right -1]){
						$right--;
					}

					$result[] = [$list[$i],$list[$left],$list[$right]];

					$left++;

					$right--;
				}

			}
		}


		return $result;
	}
}