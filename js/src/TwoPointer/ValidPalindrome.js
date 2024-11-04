


export const isvalid = (s)=>{

	const txt = s.toLowerCase(s);
	let left = 0;
	let right = txt.length -1;

	while(left < right){

		while(left < right && !/a-za0-9/.test(txt[left])){
		
			left++;
		
		}

		while(left < right && !/a-z0-9/.test(txt[right])){
			
			right--;
		
		}

		if(txt[left] !== txt[right]){
			return false;
		}

		left++;
		right--;
	}
	return true;
}