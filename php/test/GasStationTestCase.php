<?php


namespace IbrahimMH\LeetCode\Tests;
use IbrahimMH\LeetCode\Solution\ArrayProblem\GasStation;

class GasStationTestCase extends BaseTestCase{


	# [TEST]
	public function testGasStationCanCompleteCircuit(){


		$reslove = new GasStation();

		$solution = $reslove->canCompleteCircuit([1,2,3,4,5], [3,4,5,1,2]);

		$this->assertEquals(3, $solution);
	}

	#hard
		# [TEST]
	public function testGasStationCanCompleteCircuitV2(){


		$reslove = new GasStation();

		$solution = $reslove->canCompleteV2([1,2,3,4,5], [3,4,5,1,2]);

		$this->assertEquals(3, $solution);
	}


}