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

		# [TEST]
	public function testGetMinCandyV2(){


		$reslove = new Candy();

		$solution = $reslove->getMinCandyV2([1,0,2]);


		$this->assertEquals(5, $solution);

	}

}