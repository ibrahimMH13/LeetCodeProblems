<?php


namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Solution\StringProblem\LengthLastWord;

class LengthLastWordTestCase extends BaseTestCase{


	# [TEST]
	public function testLengthLastWord(){

		$reslove = new LengthLastWord();

		$solution = $reslove->getLength('ibrahim ismail musabeh');

		$this->assertEquals(7, $solution);
	}
}