import { Rotate } from '../src/Matrix/RotateImage';




test('rotate',()=>{

    const image = [[1,2,3],[4,5,6],[7,8,9]];
    expect(Rotate(image))
    .toEqual([[7,4,1],[8,5,2],[9,6,3]]);
});