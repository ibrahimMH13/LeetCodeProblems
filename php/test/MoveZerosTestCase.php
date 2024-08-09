<?php

namespace IbrahimMH\LeetCode\Tests;


use IbrahimMH\LeetCode\Solution\ArrayProblem\MoveZeros;


class MoveZerosTestCase extends BaseTestCase{


	#[TEST]
	public function testMoveZeros(){

		   $reslove = new MoveZeros();
		   $arr = [0,1,0,3,12];
		   $reslove->MoveZeros($arr);
		   $this->assertEquals([1,3,12,0,0], $arr);
	}

}