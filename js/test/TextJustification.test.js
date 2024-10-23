import { Justify } from "../src/StringProblem/TextJustification";




test('Justify',()=>{

	expect(Justify(["This", "is", "an", "example", "of", "text", "justification."],16)).toEqual(["This    is    an","example  of text","justification.  "]
);
})


