import { RandomizedSet } from '../src/CustomDS/RandomizedSet';




test('RandomizedSet insert',()=>{

	let rSet = new RandomizedSet();
	expect(rSet.insert('ibrahim')).toEqual(true);
	expect(rSet.insert('ibrahim')).toEqual(false);
});


test('RandomizedSet getRandom',()=>{

	let rSet = new RandomizedSet();
	expect(rSet.insert('ibrahim')).toEqual(true);
	expect(rSet.insert('ismail')).toEqual(true);
	expect(rSet.insert('musabeh')).toEqual(true);
	let randomEle = rSet.Random();
	expect(["ibrahim","ismail","musabeh"]).toContain(randomEle);
});


test('RandomizedSet delete',()=>{

	let rSet = new RandomizedSet();
	expect(rSet.insert('utm')).toEqual(true);
	expect(rSet.remove('utm')).toEqual(true);
});