<?php

namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Solution\StringProblem\IntegerToRoman;

class IntegerToRomanTestCase extends BaseTestCase{


	public function testIntegerToRoman(){


		$reslove = new IntegerToRoman();

		$solution = $reslove->convert(3749);

		$this->assertEquals('MMMDCCXLIX', $solution);
	}
}