from custom_ds.randomized_set import RandomizeSet




def test_randomized_set():

	collection = RandomizeSet()

	assert collection.insert() == True