<?php


namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Solution\TwoPointer\T3Sum;

class T3SumTestCase extends BaseTestCase{


	public function testT3sum(){

		$reslove = new T3Sum();

		$solution = $reslove->get([-1,0,1,2,-1,-4]);

		$this->assertEquals([[-1,-1,2],[-1,0,1]], $solution);
	}
}