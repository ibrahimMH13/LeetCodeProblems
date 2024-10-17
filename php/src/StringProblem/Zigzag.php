<?php

namespace IbrahimMH\LeetCode\Solution\StringProblem;


class Zigzag{


	public function convert($s, $rows){


		if ($rows == 1)  return $s;

		$rowsArray = array_fill(0, $rows, "");

		$strLength = strlen($s);
		
		$goingDown = false;

		$currentRow = 0;

		$result = "";

		for($i=0;$i< $strLength;$i++){

			$rowsArray[$currentRow] .= $s[$i];

			if ($currentRow ==0 || $currentRow == $rows -1) {
				
				$goingDown = !$goingDown;
			}

			$currentRow += $goingDown? 1 : -1;

		}

		foreach($rowsArray as $row){

			$result .= $row;
		}

		return $result;
	}
}