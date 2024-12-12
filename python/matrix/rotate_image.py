



def rotate_image(board: list[list[int]]) -> list[list[int]]:

    length = len(board)

    for i in range(length):
        for j in range(i + 1, length): 
            board[i][j], board[j][i] = board[j][i], board[i][j]
    

    for i in range(length):
        board[i].reverse()

    return board
