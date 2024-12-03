<?php


namespace IbrahimMH\LeetCode\Solution\Matrix;

class RotateImage{


    public function rotate(array $matrix){

        $length = count($matrix);
        for($i=0; $i < $length; $i++){
            for($j=$i + 1; $j < $length; $j++){
                $temp = $matrix[$i][$j];
                $matrix[$i][$j] = $matrix[$j][$i];
                $matrix[$j][$i] = $temp;
            
            }
        }
        for($i=0;$i< $length; $i++){
            $matrix[$i] = array_reverse($matrix[$i]);
        }

        return $matrix;
    }
}