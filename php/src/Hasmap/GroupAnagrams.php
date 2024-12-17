<?php


namespace IbrahimMH\LeetCode\Solution\Hasmap;

class GroupAnagrams{


    public function getList(array $words){

       $hashmap = [];

       foreach($words as $word){

            $letters = str_split($word);

            sort($letters);

            $key = implode('',$letters);

            if(!isset($hashmap[$key])){
            
                $hashmap[$key] = [];
            
            }

            $hashmap[$key][] = $word; 
       }

       return array_values($hashmap);
    
    }

}