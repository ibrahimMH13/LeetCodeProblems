


export function RomanToInteger(romanNumber){

	const map = {
					'I'  : 1,
					'V'  : 5,
					'X'  : 10,
					'L'  : 50,
					'C'  : 100,
					'D'  : 500,
					'M'  : 1000
			};

	let total = 0;

	const lengthOfString = romanNumber.length - 1;

	for (let i = 0; i <= lengthOfString; i++) {

		let current = map[romanNumber[i]];

		let next = i < lengthOfString? map[romanNumber[i + 1]]: 0;

		if (current < next) {

			total -= current;

		}else{

			total += current;
		}
	}
	return total;
}

