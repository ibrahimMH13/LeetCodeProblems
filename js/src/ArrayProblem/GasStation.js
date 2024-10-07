

export const canCompleteCircuit = (gas, cost) =>{


		let totalCost = 0;

		let totalGas = 0;

		let currentGas = 0;

		let currentStation = 0;

		const length = gas.length;


		for (let i = 0; i < length; i++) {
			
			totalCost += cost[i];

			totalGas += gas[i];
		}

		if (totalGas < totalCost) return -1;


		for (let i =0; i< length; i++) {
			
			currentGas += gas[i] - cost[i];

			if (currentGas < 0) {

				currentGas = 0;

				currentStation = i + 1;
			}
		}

		return currentStation;
}