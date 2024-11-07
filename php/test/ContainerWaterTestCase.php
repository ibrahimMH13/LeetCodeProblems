<?php

namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Tests\BaseTestCase;
use IbrahimMH\LeetCode\Solution\TwoPointer\ContainerWater;
class ContainerWaterTestCase extends BaseTestCase{

    public function testContainerWater(){

        $reslove = new ContainerWater();

        $solution = $reslove->calculateArea([1,8,6,2,5,4,8,3,7]);
        
        $this->assertEquals(49, $solution);
    }
}