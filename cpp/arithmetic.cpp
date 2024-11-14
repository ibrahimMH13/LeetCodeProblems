#include <iostream>


class Arithmetic {

    
    public:
        
        double i,r;
        Arithmetic():i{0},r{0} {};
        Arithmetic(double x, double z):i{x},r{z} {};
   
        double getI(){
            return i;
        }
   
};

int main(){
    
    Arithmetic xrt;
    double x = xrt.getI();

    Arithmetic* y = new Arithmetic(1.3, 4.5);
    std::cout << "Class\n";
    std::cout << x << "\n";
    std::cout << y->r << "\n";
    
    delete y;
    return 0;
}