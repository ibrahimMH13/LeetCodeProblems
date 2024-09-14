

import { RemoveTargetElement } from '../src/ArrayProblem/RemoveTargetElement';




test('RemoveTargetElement',()=>{

	const list = [0,1,2,2,3,0,4,2];

	expect(RemoveTargetElement(list, 2)).toEqual(5);
});