<?php


namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Solution\ArrayProblem\SingleNumber;
class SingleNumberTestCase extends BaseTestCase{

	# test Data
	/**
	* CASE 1# [2,2,1], 		output should be 1
	* CASE 2# [4,1,2,1,2],  output should be 4
	* CASE 3# [1], 			output should be 1
	*/

	#[TEST]
	public function testSingleNumber(){

		$reslove = new SingleNumber();
		$solution = $reslove->getSingleNumber([4,1,2,1,2]);
		$this->assertEquals(4,$solution);
	}
}