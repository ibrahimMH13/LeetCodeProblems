import { getMinimumSize } from '../src/WindowSlide/MinimumSizeSubarraySum';

test('getMinimumSize',()=>{

    expect(getMinimumSize([2,3,1,2,4,3],7)).toEqual(2);
});