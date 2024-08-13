



export function LongestCommonPrefix(list){

	if (list.length ==0) return '';

	let prefix = list[0];

	for(let word of list){
		
		while(word.indexOf(prefix) !== 0 ){

			prefix = prefix.substring(0, prefix.length -1);

			if (prefix =='') return '';
		}
	}

	return prefix;
}