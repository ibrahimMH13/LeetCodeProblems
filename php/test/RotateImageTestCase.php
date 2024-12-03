<?php
namespace IbrahimMH\LeetCode\Tests;

use IbrahimMH\LeetCode\Tests\BaseTestCase;
use IbrahimMH\LeetCode\Solution\Matrix\RotateImage;
class RotateImageTestCase extends BaseTestCase{

    # [TEST]
    public function testRotateImage(){

        $reslove =  new RotateImage();
        $image = [[1,2,3],[4,5,6],[7,8,9]];
        $reslove->rotate($image);

        $this->assertEquals([[7,4,1],[8,5,2],[9,6,3]],$image);

    }

}