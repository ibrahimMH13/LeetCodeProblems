<?php



namespace IbrahimMH\LeetCode\Solution\ArrayProblem;

# Easy
class BestTimeBuySellStock{


	public function getMaxProfit(array $list){
		   $profit = 0;
		   $minPrice = PHP_INT_MAX;

		   for ($i=0; $i < count($list); $i++) { 
		   	    if($list[$i] < $minPrice){
		   	    	$minPrice = $list[$i];
		   	    }elseif(($list[$i] - $minPrice) > $profit){
		   	    	$profit = $list[$i] - $minPrice; 
		   	    }
		   }
		   return $profit;
	}
}