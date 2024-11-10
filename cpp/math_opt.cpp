#include <iostream>
#include "./contract/math_opt.h"

int add(int a, int b);  

int main() {
    std::cout << add(3, 6) << "\n";  
    return 0;
}

int add(int a, int b) {
    return a + b;
}
