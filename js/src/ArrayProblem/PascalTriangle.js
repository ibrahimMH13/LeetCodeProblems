export function PascalTriangle(rawNumber) {
    const triangle = [];

    for (let i = 0; i <= rawNumber; i++) {

    	triangle[i] = [];
        for (let j = 0; j <= i; j++) {

            if (j === 0 || j === i) {

                triangle[i][j] = 1; 

            } else {

                triangle[i][j] = triangle[i - 1][j - 1] + triangle[i - 1][j];
            }
        }
    }

    return triangle;
}
