<?php

namespace IbrahimMH\LeetCode\Solution\ArrayProblem;



class HIndex{


	public function getHIndex($list){

		rsort($list);
		
		$hIndex = 0;

		for($i =0; $i < count($list); $i++){

			if ($list[$i] >= ($i + 1)) {
				
				$hIndex = ($i + 1);

			}else{

				break;

			}
		}

		return $hIndex;
	}

}