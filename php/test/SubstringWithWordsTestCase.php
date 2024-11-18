<?php

namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Solution\SlideWindow\SubstringWithWords;
use IbrahimMH\LeetCode\Tests\BaseTestCase;

class SubstringWithWordsTestCase extends BaseTestCase{


    public function testFindSubString(){

        $reslove = new SubstringWithWords();

        $solution = $reslove->findSubstring("barfoothefoobarman",["foo","bar"]);

        $this->assertEquals([0,9], $solution);
    }
}