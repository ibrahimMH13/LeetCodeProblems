<?php



namespace IbrahimMH\LeetCode\Solution\ArrayProblem;



# Easy
class SearchInsertPosition 
{
	
	public function getSearchInsertPosition(array $array,int $target){
		
		$left = 0;
		$right = count($array) - 1;

		while ($left <= $right) {
			$mid = $left + ($right - $left);
			if ($array[$mid] == $target) {
				return $mid;
			}elseif($array[$mid] < $target){
				$left = $mid  + 1;
			}else{
				$right = $mid - 1;	
			}
		}
		return $left;
	}
}