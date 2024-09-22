


export function getMaxProfitOfBestTimeBuySellStockII(prices){

	let profits = 0;


	for (let i = 1; i <= prices.length; i++) {
		
		if(prices[i] > prices[i - 1]){

			profits += prices[i] - prices[i - 1];
		}

	}

	return profits;
}