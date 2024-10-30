<?php


namespace IbrahimMH\LeetCode\Tests;
use IbrahimMH\LeetCode\Solution\ArrayProblem\HIndex;

class HIndexTestCase extends BaseTestCase{


	#[TEST]
	public function testHIndex(){

		$reslove = new HIndex();
		
		$solution = $reslove->getHIndex([3,0,6,1,5]);

		$this->assertEquals($solution,3);
	}

	#[TEST]
	public function testHIndexV2(){

		$reslove = new HIndex();
		
		$solution = $reslove->getHIndexV2([3,0,6,1,5]);

		$this->assertEquals(3, $solution);
	}

}