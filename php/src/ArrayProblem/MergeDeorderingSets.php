<?php

namespace IbrahimMH\LeetCode\Solution\ArrayProblem;


class MergeDeorderingSets{



	public function merge(&$list1, $m, $list2 ,$n){

			$totalSize = $m + $n - 1;
			$lastIndex1 = $m - 1;
			$lastIndex2 = $n - 1;

			while($lastIndex1 >= 0 && $lastIndex2 >= 0){

				if($list1[$lastIndex1] > $list2[$lastIndex2]){

						$list1[$totalSize] = $list1[$lastIndex1];
						$lastIndex1 --;
						$totalSize --;
				}else{
					$list1[$totalSize] = $list2[$lastIndex2];
					$lastIndex2--;
					$totalSize--;

				}
			}


			while($lastIndex2 >= 0){

				$list1[$totalSize] = $list2[$lastIndex2];
				$lastIndex2--;
				$totalSize--; 
			}
	}
}