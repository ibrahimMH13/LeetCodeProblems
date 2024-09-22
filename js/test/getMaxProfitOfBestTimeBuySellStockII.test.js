

import { getMaxProfitOfBestTimeBuySellStockII } from '../src/ArrayProblem/BestTimeBuySellStockII';




test('getMaxProfitOfBestTimeBuySellStockII',()=>{

	const prices = [7, 1, 5, 3, 6, 4];
	const r = getMaxProfitOfBestTimeBuySellStockII(prices);
	expect(r).toEqual(7);
});
