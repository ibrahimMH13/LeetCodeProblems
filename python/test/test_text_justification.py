from string_problem.text_justification import justify




def test_justify_text():

	assert justify(["This", "is", "an", "example", "of", "text", "justification."],16) == ["This    is    an","example  of text","justification.  "]