



def get_min_size(nums: list, target: int) -> int:

    start = 0
    min_length = len(nums) + 1
    sum = 0

    for k,v in  enumerate(nums):

        sum += v

        while sum >= target:
            min_length = min(min_length, k - start + 1)
            sum -= nums[start]
            start += 1
    
    return min_length if min_length <= len(nums) else 0