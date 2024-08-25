


def pascal_triangle(rawNumber):
    triangle = []  

    for i in range(rawNumber + 1):
        row = [1] * (i + 1) 
        for j in range(1, i):
            row[j] = triangle[i - 1][j - 1] + triangle[i - 1][j]
        triangle.append(row)  

    return triangle
