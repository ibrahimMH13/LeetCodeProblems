<?php

namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Solution\ArrayProblem\BestTimeBuySellStockII;

class BestTimeBuySellStockIITestCase extends BaseTestCase{


	#[TEST]
	public function testMaxProfit(){

		$prices = [7, 1, 5, 3, 6, 4];
		
		$reslove = new BestTimeBuySellStockII();
		
		$solution = $reslove->getMaxProfit($prices);

		$this->assertEquals(7, $solution);
	
	}

		#[TEST]
	public function testMaxProfitV2(){

		$prices = [7, 1, 5, 3, 6, 4];
		
		$reslove = new BestTimeBuySellStockII();
		
		$solution = $reslove->getMaxProfitV2($prices);

		$this->assertEquals(7, $solution);
	
	}

}