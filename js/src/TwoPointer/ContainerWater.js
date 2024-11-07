




export const calculateArea = (list)=>{

    let left = 0;
    let right = list.length - 1;
    let maxArea = 0;

    while(left < right){

        let area = Math.min(list[right], list[left]) * (right - left);
            
            maxArea = Math.max(area, maxArea);

            if(list[left] < list[right]){
                left++;
            }else{
                right--;
            }
    }
    return maxArea;
}