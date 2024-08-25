


export function getSearchInsertPosition(list, traget){

	let left = 0;
	let right = list.length -1;


	while(left <= right){

		let mid = Math.floor((right - left) / 2);

		if (list[mid] === traget) return mid;

		if (list[mid] > traget) {

			right = mid - 1;

		}else{

			left = mid + 1;

		}

		return left;
	}
}