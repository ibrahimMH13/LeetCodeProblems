<?php

namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Solution\ArrayProblem\TrappingRainWater;



class TrappingRainWaterTestCase extends BaseTestCase{


	# [TEST]
	public function testTrappingRainWater(){

		$reslove = new TrappingRainWater();

		$solution = $reslove->calculate([0,1,0,2,1,0,1,3,2,1,2,1]);

		$this->assertEquals(6, $solution);

	}
}