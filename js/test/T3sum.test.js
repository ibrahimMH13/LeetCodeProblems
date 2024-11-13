import { getTriple } from '../src/TwoPointer/T3sum';




test('getTriple',()=>{

	expect(getTriple([-1,0,1,2,-1,-4])).toEqual([[-1,-1,2],[-1,0,1]]);
});