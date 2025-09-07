<?php


namespace IbrahimMH\LeetCode\Solution\StringProblem;


# Easy
class ReverseIntegerDigit{



	public function reverse(int $number){
        
        $rev = 0;
        $INT_MAX = 1 << 31;   
        $INT_MIN = - $INT_MAX; 
        while($number !== 0){
            $popLastNumber = $number % 10;
            $number = intdiv($number,10);
            if($rev > $INT_MAX || ($rev === $INT_MAX) && $popLastNumber === 7) return 0;
            if($rev < $INT_MIN || ($rev === $INT_MIN) && $popLastNumber === -8) return 0;
            $rev = $rev * 10 + $popLastNumber;
        }

        return $rev;
	}
}