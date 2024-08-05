<?php


namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Solution\ArrayProblem\SearchInsertPosition;



class SearchInsertPositionTestCase extends BaseTestCase{




	#[TEST]
	# test Data#
	/**
	* CASE 1# [1,3,5,6], target is 5, output should be 2
	* CASE 2# [1,3,5,6], traget is 2, output should be 1
	* CASE 3# [1,3,5,6], target is 7, output should be 4
	*/

	public function testSearchInsertPosition()
	{
		$reslove = new SearchInsertPosition();
		$solution = $reslove->getSearchInsertPosition([1,3,5,6],7);
		$this->assertEquals(4,$solution);
	}
}