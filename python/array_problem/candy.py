



def calculate_candies(rates):

	length =  len(rates)

	candies = [1] * length


	for k in range(1,length):

		if rates[k] > rates[k -1]:

			candies[k] = candies[k -1] + 1



	for k in range(length -2,-1, -1):
		
		if rates[k] > rates[k + 1]:
			
			candies[k] = max(candies[k], candies[k + 1] + 1)


	return sum(candies)