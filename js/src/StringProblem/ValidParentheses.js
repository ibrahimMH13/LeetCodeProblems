


export function ValidParentheses(txt) {
	
	const mapper = {
		'{' : '}',
		'[' : ']',
		'(' : ')'
	};

	const stack = [];

	const length = txt.length - 1;

	for (let i = 0;i<= length ; i++) {
		let char = txt[i];
		if (mapper[char] !== undefined) {
			stack.push(mapper[char]);
		}else if(stack.includes(char)){
			if(stack.pop() !== char){
				return false;
			}
		}
	}

	return stack.length === 0;
}