




export function RemoveDuplicatesSorted(list){

	let writer = 0;

	for (let reader = 1;reader < list.length; reader++) {

	if (list[writer] != list[reader]) {

		writer++;

		list[writer] = list[reader];
		}
	}
	return writer + 1;

}