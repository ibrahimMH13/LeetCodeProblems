

export function ReversedString(txt){
	let result = '';
	for (let i = txt.length - 1; i >= 0; i--) {
		result += txt[i];
	}
	return result;
}