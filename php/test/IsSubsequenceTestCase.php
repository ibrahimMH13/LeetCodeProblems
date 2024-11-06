<?php

namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Tests\BaseTestCase;
use IbrahimMH\LeetCode\Solution\TwoPointer\IsSubsequence;
class IsSubsequenceTestCase extends BaseTestCase{



	public function testIsSubsequence(){

		$reslove = new IsSubsequence();

		$solution = $reslove->is('abc','ahbgdc');

		$this->assertEquals(true, $solution);
	}
}