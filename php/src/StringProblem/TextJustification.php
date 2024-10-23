<?php

namespace IbrahimMH\LeetCode\Solution\StringProblem;

class TextJustification{

	public function do(array $listWords,int $maxWidth){

		$result = []; 
		
		$currentLine = [];

		$currentlength = 0;
		

		foreach($listWords as $word){

			if($currentlength + strlen($word) + count($currentLine) > $maxWidth){

				$totalSpace = $maxWidth - $currentlength;

				if(count($currentLine) == 1){
				
					$result[] = $currentLine[0].str_repeat(" ", $totalSpace);
				
				}else{
				
					$spaceSlots = count($currentLine) - 1;

					$evenSpace = intdiv($totalSpace, $spaceSlots);

					$extraSpace = $totalSpace % $spaceSlots;

					$justifiedLine = "";

					for($i=0;$i < $spaceSlots; $i++){
						$justifiedLine .= $currentLine[$i]. str_repeat(" ",$evenSpace + ($i < $extraSpace? 1:0));
					}
					$justifiedLine .= $currentLine[$spaceSlots];

					$result[] = $justifiedLine;

				}

				$currentLine = [];

				$currentlength = 0;
			}
			
			$currentLine[] = $word;

			$currentlength += strlen($word);

	}

		$line = implode(" ", $currentLine);

		$result[] = $line .str_repeat(" ", $maxWidth - strlen($line));

		return $result;

}


}