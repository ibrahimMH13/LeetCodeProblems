
import { canJumpGame, getMinJump } from '../src/ArrayProblem/JumpGame';



test('canJumpGame',()=>{

	expect(canJumpGame([2,3,1,0,4])).toEqual(true);
})


test('get min jump',()=>{

	expect(getMinJump([2,1])).toEqual(1);
})