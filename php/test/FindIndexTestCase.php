<?php

namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Solution\StringProblem\FindIndex;

class FindIndexTestCase extends BaseTestCase{

	public function testGitIndex(){

		$reslove = new FindIndex();

		$solution = $reslove->getIndex('sadbutsad','sad');
		
		$this->assertEquals(0, $solution);
	}
}