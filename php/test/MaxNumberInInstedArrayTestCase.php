<?php

namespace IbrahimMH\LeetCode\Tests;



use IbrahimMH\LeetCode\Solution\ArrayProblem\MaxNumberInInstedArray;


class MaxNumberInInstedArrayTestCase extends BaseTestCase{


	# [TEST]
	public function testMaxNumberInInstedArray(){

		$reslove = new MaxNumberInInstedArray();
		$solution = $reslove->getMaxNumberInInstedArray([1, [2, 3]]);
		$this->assertEquals($solution,3);
	}
}