<?php

namespace IbrahimMH\LeetCode\Tests;


use IbrahimMH\LeetCode\Solution\Matrix\Sudoku;

class SudokuTestCase extends BaseTestCase{

    # [TEST]
    public function testSudo(){

        $reslove = new Sudoku();

        $soultion = $reslove->isValid(
            [["5","3",".",".","7",".",".",".","."],
            ["6",".",".","1","9","5",".",".","."],
            [".","9","8",".",".",".",".","6","."],
            ["8",".",".",".","6",".",".",".","3"],
            ["4",".",".","8",".","3",".",".","1"],
            ["7",".",".",".","2",".",".",".","6"],
            [".","6",".",".",".",".","2","8","."],
            [".",".",".","4","1","9",".",".","5"],
            [".",".",".",".","8",".",".","7","9"]]
        );

        $this->assertTrue($soultion);
    }
}