<?php

namespace IbrahimMH\LeetCode\Tests;
use IbrahimMH\LeetCode\Solution\ArrayProblem\Candy;

class CandyTestCase extends BaseTestCase{



	# [TEST]
	public function testGetMinCandy(){


		$reslove = new Candy();

		$solution = $reslove->getMin([1,0,2]);


		$this->assertEquals(5, $solution);

	}
}