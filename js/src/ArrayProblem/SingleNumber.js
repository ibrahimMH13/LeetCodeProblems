


export function SingleNumber(list){

	let result = 0;
	
	for(let i of list){
		 result^= i;
	}
	return result;
}