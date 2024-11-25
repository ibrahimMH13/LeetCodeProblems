<?php

namespace IbrahimMH\LeetCode\Solution\Matrix;


class Sudoku{



    public function isValid(array $borad){

        $rows = array_fill(0,9,[]);
        $columns = array_fill(0,9,[]);
        $suboxs = array_fill(0,9,[]);

        for($i=0;$i < 9; $i++){
               for($j=$i;$j<=$i;$j++){

                $cell = $borad[$i][$j];

                if($cell == '.') continue;

                $boxIndex = ($i%3) * 3 + ($j%3);

                # checker
                if(in_array($cell,$rows) ||
                   in_array($cell,$columns) || 
                   in_array($cell,$suboxs[$boxIndex]))
                   {
                    return false;
                }
                echo "\n($i,$j)\n";
                # add to our logs
                $rows[$i][] = $cell;
                $columns[$j][] = $cell;
                $suboxs[$boxIndex][] = $cell;
               }
        }
        return true;
    }

}