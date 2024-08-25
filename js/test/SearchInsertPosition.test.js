

import { getSearchInsertPosition } from '../src/ArrayProblem/SearchInsertPosition' 

test('getSearchInsertPosition',()=>{
	expect(getSearchInsertPosition([1,3,5,6],5)).toEqual(2);
});