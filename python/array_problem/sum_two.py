



def get_numbers_sum(nums, target):

	bag = {}

	for k, v in enumerate(nums):
		comp = target - v
		if comp in bag:
			return [bag[comp],k]
		else:
			bag[v] = k

	return bag

