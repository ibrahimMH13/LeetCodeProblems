<?php 


namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Solution\ArrayProblem\RotateArray;


class RotateArrayTestCase extends BaseTestCase{


	public function testRoateArray(){

		$list = [1,2,3,4,5,6,7];

		$reslove = new RotateArray();

	    $reslove->rotate($list, 3);

	    $this->assertEquals($list, [5,6,7,1,2,3,4]);
	
	 }

}