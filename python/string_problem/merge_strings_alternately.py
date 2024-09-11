



def merge_alternately(w1,w2):

	lgOne = len(w1)
	lgTwo = len(w2)
	loop = 0
	result = ''

	while loop < lgOne or loop < lgTwo:

		if loop < lgOne:
			result += w1[loop]

		if loop < lgTwo:
			result += w2[loop]
		
		loop += 1

	return result;