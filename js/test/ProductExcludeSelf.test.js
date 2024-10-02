import { calculateProductExcludeSelf } from '../src/ArrayProblem/ProductExcludeSelf'




test('calculateProductExcludeSelf',()=>{


	expect(calculateProductExcludeSelf([1,2,3,4])).toEqual([24,12,8,6]);
	
})