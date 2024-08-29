<?php

namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Solution\StringProblem\MergeAlternately;


class MergeAlternatelyTestCase extends BaseTestCase{


	#[TEST]
	/**
	* CASE 1# ibrahim ,musabeh, target is 5, output should be 2
	*/

	public function testmergeAlternately(){


		$reslove = new mergeAlternately();

		$solution = $reslove->doMergeAlternately('ibrahim','musabeh');

		$this->assertEquals('imbursaahbiemh',$solution);
	}

}