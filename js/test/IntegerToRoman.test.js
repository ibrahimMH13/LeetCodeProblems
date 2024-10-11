import { convert } from '../src/StringProblem/IntegerToRoman';




test('IntegerToRoman',()=>{

	expect(convert('3749')).toEqual('MMMDCCXLIX');
});