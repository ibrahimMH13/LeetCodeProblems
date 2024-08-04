<?php

namespace IbrahimMH\LeetCode\Tests;


use IbrahimMH\LeetCode\Tests;
use IbrahimMH\LeetCode\Solution\StringProblem\{
	RomanToInteger
};


class RomanToIntegerTestCase extends BaseTestCase{



	#[TEST]
	public function testConvertRomainToInteger()
	{
		$reslove = new RomanToInteger();
		$solution = $reslove->convertRomanToInteger('MCMXCIV'); #MCMXCIV => 1994, III=>3
		$this->assertEquals(1994, $solution);
	}
}