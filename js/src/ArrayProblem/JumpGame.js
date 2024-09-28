



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


export function getMinJump($list){

	let steps = 0;
	let maxJump = 0;
	let length = $list.length;
	let currentJumpEndAt = 0;

	for (let i = 0;i < length; i++) {
		
		maxJump = Math.max(maxJump,(i+$list[i]));

		if (currentJumpEndAt === i) {
			steps++;
			currentJumpEndAt = maxJump;
		}

		if (currentJumpEndAt >= (length -1)) return steps;
	}
}