<?php

namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Solution\ArrayProblem\ProductExcludeSelf;


class ProductExcludeSelfTestCase extends BaseTestCase{


	#[TEST]
	public function testProductExcludeSelf(){


		$reslove = new ProductExcludeSelf();

		$solution = $reslove->calculate([1,2,3,4]);

		$this->assertEquals([24,12,8,6], $solution);
	}
}