import { groupAnagram } from '../src/Hashmap/groupAnagram.js'



test('should first', () => { 
    
    expect(groupAnagram(["eat","tea","tan","ate","nat","bat"])).toEqual([["eat","tea","ate"],["tan","nat"],["bat"]]);

 });