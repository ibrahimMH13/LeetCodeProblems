


export const getLengthLastWord = (string)=>{

	let count = 0;

	for(let i= string.length - 1; i >=0; i--){

		if(string[i] == ' ') break;

		count++;
	}

	return count;
}