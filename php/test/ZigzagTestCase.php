<?php


namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Solution\StringProblem\Zigzag;
class ZigzagTestCase extends BaseTestCase{



	public function testZigzag(){


		$reslove = new Zigzag();

		$solution = $reslove->convert('PAYPALISHIRING', 3);

		$this->assertEquals("PAHNAPLSIIGYIR", $solution);
	}
}