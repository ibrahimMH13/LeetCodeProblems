from two_pointer.triplet_3sum import get_triple



def test_get_triple():

	assert get_triple([-1,0,1,2,-1,-4]) == [[-1,-1,2],[-1,0,1]]