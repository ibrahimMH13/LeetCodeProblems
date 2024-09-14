


export  function RemoveTargetElement(list, target) {
	let writer = 0;
	for (let i=0; i < list.length; i++) {

		if (list[i] != target) {
			list[writer] = list[i];
			writer++;
		}

	}
	return writer;
}