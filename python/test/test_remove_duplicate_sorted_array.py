
from array_problem.remove_duplicates_sorted_array import remove_duplicate



def test_remove_duplicates_sorted_array():
	
	list = [0,0,1,1,1,2,2,3,3,4]

	countNums = remove_duplicate(list)

	assert countNums == 5
