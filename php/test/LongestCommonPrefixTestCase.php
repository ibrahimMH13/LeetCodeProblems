<?php


namespace IbrahimMH\LeetCode\Tests;


use IbrahimMH\LeetCode\Solution\StringProblem\LongestCommonPrefix;



class LongestCommonPrefixTestCase extends BaseTestCase{


	#[TEST]
	public function testLongestCommonPrefix(){

		$reslove = new LongestCommonPrefix();
		# test Data#
		/**
		 * CASE 1# ["flower", "flow", "flight"],
		 * CASE 2# ["dog","racecar","car"]
		 * CASE 3# ["ibro",'ibrahim','ibrahm']
		 */
		$solution = $reslove->getLongestCommonPrefix(["dog","racecar","car"]);
		$this->assertEquals('',$solution);
	}


}