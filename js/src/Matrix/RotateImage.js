


export const Rotate = (list) => {
    const length = list.length;

    for (let i = 0; i < length; i++) {

        for (let j = i; j < length; j++) {
        
            let temp = list[i][j];
        
            list[i][j] = list[j][i];
        
            list[j][i] = temp;
        
        }
    }

    for (let i = 0; i < length; i++) {

        list[i].reverse();
   
    }

    return list;
}