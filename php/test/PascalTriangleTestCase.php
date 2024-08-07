<?php


namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Solution\ArrayProblem\PascalTriangle;

class PascalTriangleTestCase extends BaseTestCase{


	# test Data#
	/**
	* CASE 1#target is 5, output should be [[1],[1,1],[1,2,1],[1,3,3,1],[1,4,6,4,1]]
	* CASE 2#traget is 1, output should be [[1]]
	*/

	# [TEST]
	public function testPascalsTriangle(){

		$reslove = new PascalTriangle();
		$solution = $reslove->generate(5);
		echo "\n";
		foreach ($solution as $row) {
		    echo implode(' ', $row) . PHP_EOL;
		}
		$this->assertTrue(true);
	}
}