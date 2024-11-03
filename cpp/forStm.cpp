#include <iostream>


int main(){

    int x[] = {1,2,3,4,5};
    for (auto& v : x) {
       int sq = v * v;
        std::cout << "square number of "<< v <<" is "<< sq <<"\n";
    }
    return 0;
}