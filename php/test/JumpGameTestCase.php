<?php

namespace IbrahimMH\LeetCode\Tests;
use IbrahimMH\LeetCode\Solution\ArrayProblem\JumpGame;
class JumpGameTestCase extends BaseTestCase{
	#[TEST]
	public function testJumpGame(){

		$reslove = new JumpGame();
		
		$solution = $reslove->can([2,3,1,0,4]);
		$this->assertEquals(true,$solution);
	}

}