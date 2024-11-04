<?php

namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Tests\BaseTestCase;
use IbrahimMH\LeetCode\Solution\TwoPointer\ValidPalindrome;

class ValidPalindromeTestCase extends BaseTestCase{


	public function testValidPalindrome(){

		$reslove = new ValidPalindrome();
		$solution = $reslove->isvalid("A man, a plan, a canal: Panama");

		$this->assertEquals(true, $solution);

	}
}