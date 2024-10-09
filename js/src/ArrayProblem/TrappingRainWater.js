



export const caculate = (hight)=>{

	let left = 0 ;

	let right = hight.length - 1;

	let maxRight = 0;

	let maxLeft = 0;

	let totalWater = 0;


	while(left <= right){

		if(hight[left] < hight[right]){

			if(hight[left] >= maxLeft){
		
				maxLeft = hight[left];
		
			}else{

				totalWater += maxLeft - hight[left];
		
			}
		
			left++;
		
		}else{

			if (hight[right]>= maxRight) {

				maxRight = hight[right];
			}else{

				totalWater += maxRight - hight[right];
			}

			right--;
		}
	}

	return totalWater;

}