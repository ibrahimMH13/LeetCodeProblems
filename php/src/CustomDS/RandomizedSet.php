<?php

namespace IbrahimMH\LeetCode\Solution\CustomDS;


/**
 * 
 */
class RandomizedSet 
{
	private $map;
	private $list;
	
	function __construct()
	{
		$this->map = [];
		$this->list = [];
	}


	public function insert($value)
	{
		if (isset($this->map[$value])) return false;
		
		$this->map[$value] = count($this->list);

		$this->list[] = $value;

		return true;
	}

	public function remove($value){

		if (!isset($this->map[$value])) return false;

		$dIndex = $this->map[$value];

		$lastEle = array_pop($this->list);

		$this->map[$lastEle] = $dIndex;

		$this->list[$dIndex] = $lastEle;

		unset($this->map[$value]);

		array_pop($this->list);

		return true;
	}

	public function getRandom(){

		$random = rand(0, count($this->list) - 1);

		return $this->list[$random];
	}
}
