<?php


namespace IbrahimMH\LeetCode\Tests;
use IbrahimMH\LeetCode\Solution\ArrayProblem\RemoveDuplicatesSorted;


class RemoveDuplicatesSortedTestCase extends BaseTestCase{



	public function testRemoveDuplicatesSorted(){

		$list = [0,0,1,1,1,2,2,3,3,4];

		$reslove = new RemoveDuplicatesSorted();

		$solution = $reslove->removeDuplicate($list);

		$this->assertEquals(5, $solution);
	}
}