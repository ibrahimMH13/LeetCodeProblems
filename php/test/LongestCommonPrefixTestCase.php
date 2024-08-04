<?php



namespace IbrahimMH\LeetCode\Tests;


use IbrahimMH\LeetCode\Solution\StringProblem\LongestCommonPrefix;



class LongestCommonPrefixTestCase extends BaseTestCase{


	#[TEST]
	public function textLongestCommonPrefix(){

		$reslove = new LongestCommonPrefix();
		# ["flower", "flow", "flight"],["dog","racecar","car"]
		$solution = $reslove->getLongestCommonPrefix(["dog","racecar","car"]);
		echo "Ssssss";
		#$this->assertEquals('fl',$solution);
	}


}