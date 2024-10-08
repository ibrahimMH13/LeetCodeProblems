import { calculateMinCandies } from '../src/ArrayProblem/Candy';



test('calculateMinCandies',()=>{

	expect(calculateMinCandies([1,0,2])).toEqual(5);
});