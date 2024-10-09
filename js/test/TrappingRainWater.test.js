import { caculate } from '../src/ArrayProblem/TrappingRainWater';



test('caculate', ()=>{

	expect(caculate([0,1,0,2,1,0,1,3,2,1,2,1])).toEqual(6);

});