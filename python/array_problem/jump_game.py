def can_jump(nums):

    steps = 0
    length = len(nums) - 1

    for k, v in enumerate(nums):

        if k > steps: 
            return False

        steps = max(steps, k + v)

    # After the loop, check if the farthest reachable index is at or beyond the last index
    return steps >= length




def get_min_jump(list):

    steps = 0
    maxJamp = 0
    currentJumpEndAt = 0
    length = len(list)


    for k,v in enumerate(list):

        maxJamp = max(maxJamp, (k + v ))

        if currentJumpEndAt == k:

            currentJumpEndAt = maxJamp
            
            steps +=1

        if currentJumpEndAt >= (length -1):

            return steps;