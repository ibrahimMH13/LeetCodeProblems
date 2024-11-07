


def calc_area(list)->int:

    left = 0
    right = len(list) - 1
    max_area = 0

    while left < right :

        area = min(list[left], list[right]) * (right - left)

        max_area = max(max_area, area)

        if list[left] < list[right]: 
            left += 1
        else:
            right -= 1

    return max_area