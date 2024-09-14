

import {RemoveDuplicatesSorted} from '../src/ArrayProblem/RemoveDuplicatesSorted';




test('RemoveDuplicatesSorted',()=>{
 
 const list = [0,0,1,1,1,2,2,3,3,4];

 expect(RemoveDuplicatesSorted(list)).toEqual(5);
});