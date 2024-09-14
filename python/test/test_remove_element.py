
from array_problem.remove_target_element import remove_element



def test_remove_target_element():
	
	list = [0,1,2,2,3,0,4,2];
	
	assert remove_element(list, 2) == 5