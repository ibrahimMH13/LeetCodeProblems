<?php

namespace IbrahimMH\LeetCode\Tests;


use IbrahimMH\LeetCode\Solution\ArrayProblem\MoveZeros;


class MoveZerosTestCase extends BaseTestCase{

	# test Data
	/**
	* CASE 1# [0,1,0,3,12], output should be [1,3,12,0,0]
	*/

	#[TEST]
	public function testMoveZeros(){

		   $reslove = new MoveZeros();
		   $arr = [0,1,0,3,12];
		   $reslove->MoveZeros($arr);
		   $this->assertEquals([1,3,12,0,0], $arr);
	}

}