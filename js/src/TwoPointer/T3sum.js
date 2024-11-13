




export const getTriple = (list) =>{

	list.sort();

	const result = [];
	
	for (let i = 0 ; i< list.length; i++) {
		
		if (i > 0 && list[i] == list[i - 1])  {
			continue;
		}

		let left = i + 1;
		
		let right = list.length - 1;

		while(left < right){

			let total = list[i] + list[left] + list[right];

			if (total < 0) {
				left++;
			}else if(total > 0){
				right--;
			}else{

				const triple = [list[i], list[left], list[right]];
				while (left < right && list[left] === list[left + 1]) left++;
                while (left < right && list[right] === list[right - 1]) right--;
				result.push(triple);
				right--;
				left++;
			}
		}

	}

	return result;
}