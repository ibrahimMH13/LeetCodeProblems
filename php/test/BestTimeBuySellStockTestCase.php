<?php


namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Solution\ArrayProblem\BestTimeBuySellStock;

class BestTimeBuySellStockTestCase extends BaseTestCase{


	# test Data#
	/**
	* CASE 1#[7,6,4,3,1], output should be 0
	* CASE 2#[7,1,5,3,6,4], output should be 0
	*/

	#[TEST]
	public function testBestTimeBuySellStock(){

		$reslove = new BestTimeBuySellStock();
		$solution = $reslove->getMaxProfit([7,1,5,3,6,4]);
		$this->assertEquals(5, $solution);
	}
}