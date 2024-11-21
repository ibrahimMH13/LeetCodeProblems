#include <iostream>

class Marks{
    int size;
    double* marks;
    public:
        Marks(int s):marks{new double[s]}, size{s} {}

        ~Marks(){
        delete[]  marks;
        }
};
int main(){
   
    Marks x(4);

    return 0;
}