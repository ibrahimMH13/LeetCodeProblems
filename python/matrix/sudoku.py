



def is_valid_sudoku(borad: list) ->bool:

   rows = [set() for _ in range(9) ]
   columns = [set() for _ in range(9) ]
   suboxs = [set() for _ in range(9) ]

   for row in range(9):
      
      for column in range(9):
         
        cell = borad[row][column]

        if cell == '.': 
            continue
        
        subox_index = ( row // 3 ) * 3 + ( column // 3 ) 
        
        if ( cell in rows[row] or
             cell in columns[column] or
             cell in suboxs[subox_index] ):

            return False 

        rows[row].add(cell)
        columns[column].add(cell)
        suboxs[subox_index].add(cell)

   return True     