import { findSubstring } from '../src/WindowSlide/SubstringWithWords'




test('findSubstring',()=>{

    expect(findSubstring("barfoothefoobarman",["foo","bar"])).toEqual([0,9]);
});