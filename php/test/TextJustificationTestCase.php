<?php

namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Solution\StringProblem\TextJustification;

class TextJustificationTestCase extends BaseTestCase{


	public function testTextJustification(){


		$reslove = new TextJustification();

		$solution = $reslove->do(["This", "is", "an", "example", "of", "text", "justification."],16);

		$this->assertEquals([
   "This    is    an",
   "example  of text",
   "justification.  "
]
, $solution);

		foreach($solution as $line){

			echo "\n'".$line."' \n";
		}
	}
}