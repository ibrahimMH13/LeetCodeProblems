<?php

namespace IbrahimMH\LeetCode\Solution\ArrayProblem;

class GasStation{


	public function canCompleteCircuit($gas, $costs){


		$totalGaz = 0;
		
		$totalCost = 0;
		
		$currentGaz = 0;
		
		$currentStation = 0;

		for ($i=0; $i < count($gas); $i++) { 
			
			$totalGaz += $gas[$i];

			$totalCost += $costs[$i];
		}


		if ($totalGaz < $totalCost) return -1;

		for($i=0;$i < count($gas); $i++){

			$currentGaz += $gas[$i] - $costs[$i];

			if($currentGaz < 0){

				$currentStation = $i + 1;
				$currentGaz = 0;
			}
		}
		
		return $currentStation;
	}

	public function canCompleteV2($gas, $costs){

		$totalGaz = array_sum($gas);
		$totalCost = array_sum($costs);
		$currentStation = 0; 
		$currentGaz = 0;

		if($totalCost > $totalGaz) return -1;

		for ($i=0; $i < count($gas); $i++) { 

			$currentGaz += $gas[$i] - $costs[$i];
			
			if ($currentGaz < 0) {

				$currentGaz = 0;
				$currentStation =$i + 1;
			}
		}
		return $currentStation;

	}
}