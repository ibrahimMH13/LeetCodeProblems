



export const getMinimumSize = (list,target)=>{
    
    let start = 0;
    
    let minLength = list.length + 1;

    let sum = 0;
    for(let end =0; end < list.length; end++){

        sum += list[end];

        while(sum >= target){
            minLength = Math.min(minLength, end - start + 1);
            sum -= list[start];
            start++;
        }

    }

    return minLength <= list.length? minLength: 0;
}