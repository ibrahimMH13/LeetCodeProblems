


export const isSub = (s,txt)=>{

	let i = 0;
	let j = 0;

	while(i < txt.length){

		if (j < s.length && s[j] === txt[i]) {

			j++;
		}
		
		i++;
	}


	return j === s.length;
}