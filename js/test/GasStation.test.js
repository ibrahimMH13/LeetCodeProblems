import { canCompleteCircuit } from '../src/ArrayProblem/GasStation'


test('canCompleteCircuit',()=>{

	expect(canCompleteCircuit([1,2,3,4,5], [3,4,5,1,2])).toEqual(3);

});