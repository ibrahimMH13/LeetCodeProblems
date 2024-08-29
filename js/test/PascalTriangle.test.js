
import { PascalTriangle } from '../src/ArrayProblem/PascalTriangle';




test('PascalTriangle', () => {
    expect(PascalTriangle(5)).toEqual([
        [1],
        [1, 1],
        [1, 2, 1],
        [1, 3, 3, 1],
        [1, 4, 6, 4, 1],
        [1, 5, 10, 10, 5, 1], 
    ]);
});