


import { getMaxNumberInInstedArray } from '../src/ArrayProblem/getMaxNumberInInstedArray';




test('getMaxNumberInInstedArray',()=>{

	expect(getMaxNumberInInstedArray([-4,2,3,5,2,1,3,44,55,[33,44,20,100000]])).toEqual(100000);

});