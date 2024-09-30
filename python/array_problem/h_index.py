



def get_h_index(nums):

	nums.sort(reverse= True)

	h_index = 0

	for k,v in enumerate(nums):
		
		if v >= (k + 1):

		   h_index = k + 1

		else:
			
			break

	return h_index

