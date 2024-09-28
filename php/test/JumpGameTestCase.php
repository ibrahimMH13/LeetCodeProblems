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

	#[TEST]
	public function testMinJump(){

		$reslove = new JumpGame();

		$solution = $reslove->getMinSteps([2,1]);

		$this->assertEquals(1,$solution);
	}
}