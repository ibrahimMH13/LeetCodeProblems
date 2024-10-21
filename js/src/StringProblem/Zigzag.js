

export const getZigzag = (s, rows)=>{

    if (rows === 1 || rows >= s.length) return s;

	const length = s.length;

	let currentRows = 0;

	let arrayRows = Array(rows).fill("");

	let goingDown = false;

	let result = "";

	for (let i = 0; i < length; i++) {
		
		arrayRows[currentRows] += s[i];

		if (currentRows == 0 || currentRows == rows -1) {

			goingDown = !goingDown;

		}

		currentRows += goingDown? 1 : -1;
	}

	return arrayRows.join("");
}