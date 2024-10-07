


def can_complete_circuit(gas, cost):

	total_gas = 0

	total_cost = 0

	current_station = 0

	current_gas = 0

	length = len(gas)


	for k in range(length):

		total_gas += gas[k]

		total_cost += cost[k]


	if total_gas < total_cost:
		
		return -1

	for i in range(length):
		
		current_gas += gas[i] - cost[i]

		if current_gas < 0:
			
			current_gas = 0

			current_station = i + 1


	return current_station