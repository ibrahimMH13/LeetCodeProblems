




export function BestTimeBuySellStock(prices){

	let minPrice = prices[0];
	let profit = 0;

	for (let price of prices) {

		if (price < minPrice) {

			minPrice = price;

		}else if((price - minPrice) > profit){
			profit = price - minPrice;
		}
	}

	return profit;
}