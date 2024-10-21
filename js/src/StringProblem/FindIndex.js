


export const FindIndex = (str, needle)=>{

	if(str.length ==0) return -1;

	for (let i =0; i< (str.length - needle.length) + 1; i++) {
		
		if(str.substring(i, i + needle.length) == needle){
			return i;
		}

	}
	return -1;
}