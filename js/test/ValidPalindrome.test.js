import  { isvalid } from '../src/TwoPointer/ValidPalindrome';



test('isvalid',()=>{
	expect(isvalid('A man, a plan, a canal: Panama')).toEqual(true);
});