


export const Justify=(words , maxWidth)=>{

	let currentLineLength = 0;

	let currentLineWords = [];

	let result = [];

	for (let i=0; i < words.length; i++) {
		
		if(currentLineLength + currentLineWords.length + words[i].length > maxWidth){

			let maxSpaceAvaliable = maxWidth - currentLineLength;

			if(currentLineWords.length === 1){

				result.push(currentLineWords[0] + " ".repeat(maxSpaceAvaliable));
	
			}else{

				let spaceNeeded = currentLineWords.length - 1;

				let evenlySpace = Math.floor(maxSpaceAvaliable / spaceNeeded);

				let spaceExtra = maxSpaceAvaliable % spaceNeeded;

				let justifyLine = "";

				for(let j=0; j < spaceNeeded; j++){

					justifyLine += currentLineWords[j] + " ".repeat(evenlySpace + ( j < spaceExtra? 1:0) );
				}

				justifyLine += currentLineWords[currentLineWords.length -1];

				result.push(justifyLine);

			}

			currentLineLength = 0;

			currentLineWords = [];
		}

		currentLineWords.push(words[i]);

		currentLineLength += words[i].length;

	}
		let JustifyLeftLastLine = currentLineWords.join(" ");

		result.push(JustifyLeftLastLine + " ".repeat(maxWidth - JustifyLeftLastLine.length));

		return result;

}