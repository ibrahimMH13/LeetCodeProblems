



def find_by_simple_binary_Search(listx, target):

	left = 0;
	right = len(listx) - 1

	while left <= right:
		
		mid = left + (right - left)

		if listx[mid] == target:
			return mid

		elif listx[mid] < target:

			left = mid + 1;
		else:
			right = mid -1;

	return -1;