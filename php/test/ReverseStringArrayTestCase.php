<?php

namespace IbrahimMH\LeetCode\Tests;
use IbrahimMH\LeetCode\Tests;
use IbrahimMH\LeetCode\Solution\ArrayProblem\{
	ReverseStringArray
};
class ReverseStringArrayTestCase extends BaseTestCase{

	#[TEST]
	function testReversedStringArray(){
		$resolve = new ReverseStringArray();
        $list = ['h','e','l','l','o'];
		$resolve->reverse($list);
		$this->assertEquals(["o","l","l","e","h"],$list);
	}
}