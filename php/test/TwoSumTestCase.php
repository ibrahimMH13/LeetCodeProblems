<?php 

namespace IbrahimMH\LeetCode\Tests;
use IbrahimMH\LeetCode\Tests;
use IbrahimMH\LeetCode\Solution\ArrayProblem\{
	TwoSum
};

class TwoSumTestCase extends BaseTestCase{


	
	#[TEST]
	function testGetTwoNumbers(){

		$reslove = new TwoSum();
		$solution = $reslove->getTwoNumbers([2,7,11,15], 9);
		$this->assertEquals([0, 1], $solution);
	}

}
