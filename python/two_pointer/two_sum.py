


def get_two_number(nums, target):

    right = len(nums) - 1
    left = 0

    while left <= right:

        total = nums[right] + nums[left]

        if total == target :
            return [left+1 , right+1]
        
        if total > target :
            right -= 1
        else:
            left += 1
    
    return []