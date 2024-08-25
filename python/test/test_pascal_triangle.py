
from array_problem.pascal_triangle import pascal_triangle




def test_pascal_triangle():
    assert pascal_triangle(5) == [
        [1],
        [1, 1],
        [1, 2, 1],
        [1, 3, 3, 1],
        [1, 4, 6, 4, 1],
        [1, 5, 10, 10, 5, 1] 
    ]
