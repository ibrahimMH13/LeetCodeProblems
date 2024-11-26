


export const isValid = (board)=>{
   
   let rows = Array.from({length:9}, ()=> new Set());
   let columns = Array.from({length: 9}, ()=> new Set());
   let suboxs = Array.from({ length: 9 }, () => new Set());

   for(let i=0; i < 9; i++){
        for(let j =0; j < 9; j++){

            let cell = board[i][j];

            if( cell == '.') continue;
            
            let subboxIndex = Math.floor(i / 3) * 3 + Math.floor(j / 3);
            
            if (rows[i].has(cell) || columns[j].has(cell) || suboxs[subboxIndex].has(cell)) {
                return false;
            }

            rows[i].add(cell);
            rows[j].add(cell);
            suboxs[subboxIndex].add(cell);

        }
   }
   return true;
}