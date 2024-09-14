



def remove_element(nums, target):

	writer = 0

	for i in  nums:

		if(i != target):

			nums[writer] = nums[i]

			writer = writer + 1

	return writer