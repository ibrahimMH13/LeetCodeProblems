<?php

namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Solution\CustomDS\RandomizedSet;


class RandomizedSetTestCase extends BaseTestCase{



	public function testRandomizedSet(){

		$reslove = new RandomizedSet();

		$solution = $reslove->insert("ibrahim");

		$this->assertEquals(true, $solution);
		
		$solution = $reslove->insert("Ismail");
		
		$solution = $reslove->insert("Musabeh");

		$this->assertNotEmpty($reslove->getRandom());

		$solution = $reslove->insert("utm");

		$solution = $reslove->remove("utm");

		$this->assertTrue($solution);
	}
}