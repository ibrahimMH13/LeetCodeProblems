from slide_window.substring_with_words import find_substring



def test_find_substring():
    
    assert find_substring("barfoothefoobarman", ["foo", "bar"]) == [0, 9], "Test Case Failed"
