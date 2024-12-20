<?php 

namespace IbrahimMH\LeetCode\Solution\ArrayProblem;

class BestTimeBuySellStockII{



	public function getMaxProfit($prices)
	{

		$profits = 0;

		for ($i = 1; $i < count($prices) ; $i++) { 
			
			if ($prices[$i] > $prices[$i - 1]) {

				$profits += $prices[$i]  - $prices[$i - 1];

			}
		}
		return $profits;
	}

	public function getMaxProfitV2(array $prices){

		$profit = 0;

		for($i=0; $i< count($prices);$i++){

			if($prices[$i] > $prices[$i -1]){

				$profit += $prices[$i] - $prices[$i -1];
				
			}
		}
		return $profit;
	}
}