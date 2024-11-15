<?php

namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Solution\SlideWindow\MinimumSizeSubarraySum;


class MinimumSizeSubarraySumTestCase extends BaseTestCase {
  
    public function testMinimumSizeSubarraySum(){

        $resolve = new MinimumSizeSubarraySum();

        $solution = $resolve->get([2,3,1,2,4,3], 7);

        $this->assertEquals(2, $solution);

    }

}
