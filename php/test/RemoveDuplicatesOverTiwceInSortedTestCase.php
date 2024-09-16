<?php 

namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Solution\ArrayProblem\RemoveDuplicatesOverTiwceInSorted;

class RemoveDuplicatesOverTiwceInSortedTestCase extends BaseTestCase {


	public function testRemoveDuplicatesOverTiwce(){

		$list = [1,1,1,2,2,3];

		$reslove = new RemoveDuplicatesOverTiwceInSorted();

		$solution = $reslove->RemoveDuplicates($list);

		$this->assertEquals(5,$solution);

	}

}