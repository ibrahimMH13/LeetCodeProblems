<?php

namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Tests;
use IbrahimMH\LeetCode\Solution\TwoPointer\TwoSumSortedArrayII;


class TwoSumSortedArrayIITestCase extends BaseTestCase{

	#[TEST]
	public function testTwoSumSortedArrayII(){

		$reslove = new TwoSumSortedArrayII();
		$solution = $reslove->getTwoNumber([2,11,7,15], 9);

		$this->assertEquals([1,3], $solution);
	}
}