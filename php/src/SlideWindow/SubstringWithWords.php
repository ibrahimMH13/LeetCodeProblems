<?php

namespace IbrahimMH\LeetCode\Solution\SlideWindow;

class SubstringWithWords {

    public function findSubstring(string $s,array $words){

      if(empty($s) || empty($words)){

        return [];
      }

      $wordLength = strlen($words[0]);

      $mapFreq = [];

      $result = [];

      foreach($words as $word){

            if(isset($mapFreq[$word])){

                $mapFreq[$word]++;

            }else{

                $mapFreq[$word] = 1; 

            }

      }

      for($i=0; $i< $wordLength;$i++){

        $start = $i;

        $seen = [];

        $count = 0;

        for($j =$i; $j < strlen($s) - $wordLength; $j+=$wordLength ){

            $word = substr($s,$j,$wordLength);

            if(isset($mapFreq[$word])){

               if(isset($seen[$word])){

                $seen[$word]++;

               }else{

                $seen[$word] = 1;

               }     

                $count++;

                while($seen[$word] > $mapFreq[$word]){
                    $leftWord = substr($s,$start, $wordLength);
                    $seen[$leftWord]--;
                    $count--;
                    $start += $wordLength;
                }
                if($count === count($words)){
                    $result[] = $start;
                }

            }else{

                $seen = [];

                $count = 0;

                $start = $j + $wordLength;
            }
        }
      }
      return $result;
    }
}