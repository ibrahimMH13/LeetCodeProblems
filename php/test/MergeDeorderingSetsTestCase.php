<?php


namespace IbrahimMH\LeetCode\Tests;
use IbrahimMH\LeetCode\Solution\ArrayProblem\MergeDeorderingSets;

class MergeDeorderingSetsTestCase extends BaseTestCase{


	# test Data
	/**
	* CASE 1#[1,2,3,0,0,0],3,[2,5,6],3, output should be [[1],[1,1],[1,2,1],[1,3,3,1],[1,4,6,4,1]]
	*/

	# [TEST]
	public function testMergeDeorderingSets(){

		$reslove = new MergeDeorderingSets();
		$list1 = [1,2,3,0,0,0];
		$list2 = [2,5,6];
		$solution = $reslove->merge($list1,3,$list2,3);
		$this->assertEquals($list1, [1,2,2,3,5,6]);

	}

}