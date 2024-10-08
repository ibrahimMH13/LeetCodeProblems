




export const calculateMinCandies = (rates)=>{

	const length = rates.length;

	const candies = Array(length).fill(1);


	for (let i = 1;i < length; i++) {
			
			if(rates[i] > rates[i -1]){

				candies[i] = candies[i -1] + 1;
			}
	}



	for (let i = length - 2; i >= 0; i--) {
		
		if (rates[i] > rates[i + 1]) {

			candies[i] = Math.max(candies[i],(candies[i +1 ] + 1));

		}
	}



	return candies.reduce((ele,total)=> ele + total,0);
}