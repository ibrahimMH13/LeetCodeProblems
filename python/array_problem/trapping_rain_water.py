



def calculate_water(hight):


	left = 0

	right = len(hight) - 1

	max_right = 0

	max_left = 0

	total_water = 0


	while(left <= right):

		if(hight[left] <= hight[right]):

			if(hight[left] >= max_left):
				 
				 max_left = hight[left]
			else:

				total_water += max_left - hight[left]

			left += 1

		else:	

			if hight[right] >= max_right:
				
				max_right = hight[right]

			else:

				total_water += max_right - hight[right]

			right -= 1


	return total_water





