<?php


namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Solution\ArrayProblem\RemoveTargetElement;


class RemoveTargetElementTestCase extends BaseTestCase{



	# test Data
	/**
	* CASE 1#[0,1,2,2,3,0,4,2] target is 2, output should be 5
	*/

	# [TEST]
	public function testRemoveTargetElement(){

		$list = [0,1,2,2,3,0,4,2];

		$reslove = new RemoveTargetElement();

		$solution = $reslove->removeElement($list, 2);

		$this->assertEquals($solution, 5);

		$this->assertEquals([0, 1, 3, 0, 4], array_slice($list, 0, $solution));

	}
}