<?php 



namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Solution\StringProblem\ValidParentheses;


class ValidParenthesesTestCase extends BaseTestCase{


	#[TEST]
	public function testValidParenthesesString(){

		$reslove = new ValidParentheses();
		# test Data#
		/**
		 * CASE 1# '{}{}()()[{()}]',
		 * CASE 2# '(]'
		 * CASE 3# '(){}[]'
		 */

		$solution = $reslove->getValidParentheses('{}{}()()[{()}]');
		$this->assertTrue($solution);
		# false 
		$solution = $reslove->getValidParentheses('[}');
		$this->assertFalse($solution);



	}

} 