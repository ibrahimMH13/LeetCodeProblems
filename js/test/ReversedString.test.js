import { ReversedString } from '../src/StringProblem/ReversedString';
test('test ReversedString function', () => {
    const inputString = "hello";
    const expectedOutput = "olleh";
    expect(ReversedString(inputString)).toEqual(expectedOutput);
});