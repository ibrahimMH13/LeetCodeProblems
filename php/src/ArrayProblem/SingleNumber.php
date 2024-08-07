<?php 



namespace IbrahimMH\LeetCode\Solution\ArrayProblem;

#Easy
class SingleNumber{


	public function getSingleNumber(array $list){
			$reslut = 0;

			for($i=0; $i< count($list); $i++){
				$reslut ^= $list[$i];
			}

			return $reslut;

	}
}