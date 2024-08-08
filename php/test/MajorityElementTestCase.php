<?php


namespace IbrahimMH\LeetCode\Tests;


use IbrahimMH\LeetCode\Solution\ArrayProblem\MajorityElement;


class MajorityElementTestCase extends BaseTestCase{

	# test Data
	/**
	* CASE 1#[3,2,3], output should be 3
	*/

	#[TEST]
	public function testGetMajorityElement(){

		$reslove = new MajorityElement();
		$solution = $reslove->getMajorityElement([3,2,3]);
		$this->assertEquals(3,$solution);
	}
}