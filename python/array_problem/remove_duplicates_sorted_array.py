





def remove_duplicate(nums):
    if not nums:
        return 0
    
    writer = 0  

    for k, v in enumerate(nums):
        if nums[writer] != v:
            writer += 1
            nums[writer] = v
    
    return writer + 1 
