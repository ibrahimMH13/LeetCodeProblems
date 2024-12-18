from hashmap.group_anagrams import group_anagram




def test_group_anagram():

    assert group_anagram(["eat","tea","tan","ate","nat","bat"]) == [["eat","tea","ate"],["tan","nat"],["bat"]]