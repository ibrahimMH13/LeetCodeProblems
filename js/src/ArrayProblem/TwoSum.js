

export function TwoSum(nums, target) {
    const bag = {};

    for (let i = 0; i < nums.length; i++) {
        let comp = target - nums[i];
        if (comp in bag) {
            return [bag[comp], i];
        } else {
            bag[nums[i]] = i;
        }
    }
    return null; 
}
