from matrix.rotate_image import rotate_image



def test_rotate():

    image = [[1,2,3],[4,5,6],[7,8,9]]

    assert rotate_image(image) ==  [[7,4,1],[8,5,2],[9,6,3]]