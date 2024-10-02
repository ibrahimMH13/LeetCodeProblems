<?php

namespace IbrahimMH\LeetCode\Solution\ArrayProblem;


class ProductExcludeSelf{


	public function calculate($list){

		$length = count($list);
		
		$lProduct = 1;
		
		$rProduct = 1;

		for ($i=0; $i < $length; $i++) { 
		 	
		 	$reslut[$i] = $lProduct;

		 	$lProduct *= $list[$i];
		 } 


		 for ($i = $length -1; $i >= 0; $i--) { 
		 	
		 	$reslut[$i] = $reslut[$i] * $rProduct;

		 	$rProduct *= $list[$i];
		 }
		return $reslut;
	}
}