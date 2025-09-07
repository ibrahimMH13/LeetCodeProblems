<?php

namespace IbrahimMH\LeetCode\Tests;
use IbrahimMH\LeetCode\Tests;
use IbrahimMH\LeetCode\Solution\StringProblem\{
	ReverseIntegerDigit
};
class ReverseIntegerDigitTestCase extends BaseTestCase{

	#[TEST]
	function testReverseIntegerDigit(){
		$resolve = new ReverseIntegerDigit();
		$su = $resolve->reverse(123);
		$this->assertEquals(321,$su);
	}
}