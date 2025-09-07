<?php

namespace IbrahimMH\LeetCode\Tests;
use IbrahimMH\LeetCode\Tests;
use IbrahimMH\LeetCode\Solution\StringProblem\{
	FirstUniqueCharacter
};
class FirstUniqueCharacterTestCase extends BaseTestCase{

	#[TEST]
	function testReversedStringArray(){
		$resolve = new FirstUniqueCharacter();
		$su = $resolve->find("loveleetcode");
		$this->assertEquals(2,$su);
	}
}