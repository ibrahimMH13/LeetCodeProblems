<?php

namespace IbrahimMH\LeetCode\Tests;
use IbrahimMH\LeetCode\Tests;
use IbrahimMH\LeetCode\Solution\StringProblem\{
	ValidAnagram
};

class ValidAnagramTestCase extends BaseTestCase{

	#[TEST]
	function testValidAnagramTestCase(){
		$resolve = new ValidAnagram();
		$su = $resolve->is("anagram","nagaram");
		$this->assertEquals(true,$su);
	}
}