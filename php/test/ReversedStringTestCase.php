<?php

namespace IbrahimMH\LeetCode\Tests;
use IbrahimMH\LeetCode\Tests;
use IbrahimMH\LeetCode\Solution\StringProblem\{
	ReversedString
};
class ReversedStringTestCase extends BaseTestCase{

	#[TEST]
	function testReversedString(){
		$reslove = new ReversedString();
		$solution = $reslove->getReversedString('hello');
		$this->assertEquals('olleh',$solution);
	}
}