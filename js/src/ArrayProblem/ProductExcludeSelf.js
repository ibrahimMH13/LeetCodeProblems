




export const calculateProductExcludeSelf = (nums) => {

	const length = nums.length;
	let rProduct = 1;
	let lProduct = 1;
	const result = [];

	for (let i= 0;i < length; i++) {
		
		result[i] = lProduct;

		lProduct *= nums[i];
	}

	for (let i = length - 1; i >= 0; i--) {
		
		result[i] = result[i] * rProduct;

		rProduct *= nums[i];
	}


	return result;

}