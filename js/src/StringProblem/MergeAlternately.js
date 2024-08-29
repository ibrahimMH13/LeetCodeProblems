


export function MergeAlternately (w1,w2){

	let lgOne = w1.length;
	let lgTwo = w2.length;
	let loop = 0;
	let result = '';



	while(loop < lgOne || loop < lgTwo){

		if (loop < lgOne) {

			result += w1[loop];
		}

		if(loop < lgTwo){

			result += w2[loop];
		}

		loop++;
	}
	return result;
}