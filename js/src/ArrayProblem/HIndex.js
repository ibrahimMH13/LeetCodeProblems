



export const HIndex = (list)=>{

	list.sort((a,b)=> b - a);

	let hIndex = 0;

	for (let i=0; i < list.length; i++) {
		
		if(list[i] >= (i + 1)){

			hIndex = (i+1);

		}else{

			break;
		}

	}

	return hIndex;
}