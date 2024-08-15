


export function MajorityElement(list){


	let candiate = null;
	let balance = 0;

	for (let num of list) {
		if (candiate === null || balance === 0) {
			candiate = num;
		}

		balance = candiate === num? balance + 1: balance - 1;
	}


	return candiate;
}