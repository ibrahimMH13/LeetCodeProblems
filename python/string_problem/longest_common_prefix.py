



def get_common_prefix(words):

	if not words :
		return ''
	
	prefix = words[0]
		
	for word in words[1:]:

		while word[:len(prefix)] != prefix and prefix:
			prefix = prefix[:len(prefix) - 1];


		
	if not prefix :
		
		return ''

	return prefix;		