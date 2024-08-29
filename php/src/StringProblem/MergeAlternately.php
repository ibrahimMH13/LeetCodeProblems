<?php

namespace IbrahimMH\LeetCode\Solution\StringProblem;


class MergeAlternately {


	public function doMergeAlternately($word, $word2){


			$lgOne = strlen($word);
			$lgTwo = strlen($word2);
			$loop = 0;
			$result = '';


			while ($loop < $lgOne || $loop < $lgTwo) {
				
				if($loop < $lgOne){

					$result .= $word[$loop];

				}

				if($loop < $lgTwo){

					$result .= $word2[$loop];
				}
				
				$loop++;

			}

			return $result;
	}
}
