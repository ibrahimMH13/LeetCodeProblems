


export function getMaxNumberInInstedArray(list){

	let maxNumber = - Infinity;

	for(let number of list){

		if (Array.isArray(number)) {

			maxNumber = Math.max(maxNumber,getMaxNumberInInstedArray(number));

		}else{
			maxNumber = Math.max(maxNumber,number);
		}

	}

	return maxNumber;
}