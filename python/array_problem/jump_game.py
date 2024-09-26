def can_jump(nums):

    steps = 0
    length = len(nums) - 1

    for k, v in enumerate(nums):

        if k > steps: 
            return False

        steps = max(steps, k + v)

    # After the loop, check if the farthest reachable index is at or beyond the last index
    return steps >= length
