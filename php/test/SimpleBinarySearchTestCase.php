<?php



namespace IbrahimMH\LeetCode\Tests;


use IbrahimMH\LeetCode\Solution\ArrayProblem\SimpleBinarySearch;


class SimpleBinarySearchTestCase extends BaseTestCase{


	public function testGetTargetIndex(){

		$reslove = new SimpleBinarySearch();
		$solution = $reslove->getIndex([-1,0,3,5,9,12],9);

		echo "\n====>".$solution;
	}
}