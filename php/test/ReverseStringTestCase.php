<?php

namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Solution\StringProblem\ReverseString;
class ReverseStringTestCase extends BaseTestCase{



	public function testGetReverseString(){

		$reslove = new ReverseString();

		$solution = $reslove->getReverseString("the sky is blue");

		$this->assertEquals("blue is sky the", $solution);
	}
}