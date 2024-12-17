<?php


namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Tests\BaseTestCase;

use IbrahimMH\LeetCode\Solution\Hasmap\GroupAnagrams;

class GroupAnagramsTestCase extends BaseTestCase{

    # [TEST]
   public function testGetList(){

        $reslove = new GroupAnagrams();

        $solution = $reslove->getList(["eat","tea","tan","ate","nat","bat"]);

        $this->assertEquals([["eat","tea","ate"],["tan","nat"],["bat"]], $solution);
    }
}