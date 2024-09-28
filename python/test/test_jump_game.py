from array_problem.jump_game import can_jump
from array_problem.jump_game import get_min_jump




def test_jump():

	assert can_jump([2,3,1,0,4]) == True


def test_get_min_jump():

	assert get_min_jump([2,1]) == 1