#include <iostream>
#include "./contract/cmath_opt.h"
#include <chrono>


class MathOpt : public CMathOpt{

public:

    int add(int a, int b) const  {

    return a + b;
    
    }
    
    int sub(int a, int b) const  {

    return a - b;
    
    }
};


int main(){

    auto start = std::chrono::high_resolution_clock::now();

    MathOpt opt;

    int sum = opt.add(1, 4);

    MathOpt* opt1 = new MathOpt();

    int sumation = opt1->sub(5,1);

    std::cout << "add: " << sum << "\n";

    std::cout << "sum: " << sumation << "\n";

    delete opt1;
    auto end = std::chrono::high_resolution_clock::now();

    std::chrono::duration<double> duration = end - start;
    std::cout << "Execution time: " << duration.count() << " seconds" << std::endl;
    
    return 0 ;
}