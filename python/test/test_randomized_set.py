from custom_ds.randomized_set import RandomizeSet




def test_insert_randomized_set():

	collection = RandomizeSet()

	assert collection.insert("ibrahim") == True


def test_remove_randomized_set():

	collection = RandomizeSet();

	collection.insert("utm")
	
	assert collection.remove("utm") == True

def test_random_randomized_set():

	collection = RandomizeSet();

	collection.insert("utm")
	collection.insert("ibrahim")
	collection.insert("musabeh")

	assert collection.random() in ["utm", "ibrahim" ,"musabeh"]