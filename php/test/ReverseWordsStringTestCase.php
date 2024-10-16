<?php


namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Solution\StringProblem\ReverseWordsString;



class ReverseWordsStringTestCase extends BaseTestCase{

	#[TEST]
	public function testReverseWordsString(){


		$reslove = new ReverseWordsString();

		$solution = $reslove->reverse("the sky is blue");

		$this->assertEquals("blue is sky the", $solution);

	}
}