



export function MoveZeros(list){

	let noneZeroIndex = 0;

	for (let i= 0; i < list.length; i++) {

		if(list[i] != 0){
			let temp = list[noneZeroIndex];

			list[noneZeroIndex] = list[i];

			list[i] = temp;

			noneZeroIndex++;

		}
	}

	return list;
}