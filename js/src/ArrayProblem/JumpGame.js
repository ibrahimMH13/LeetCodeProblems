



export function canJumpGame(list){

	let steps = 0;
	let length = list.length - 1;

	for (let i = 0; i <= length; i++) {
			
			if (i > steps) {
				return false;
			}

			steps = Math.max(steps, (i + list[i]));

			if (steps >= length) {return true}
	}
	return false;
}