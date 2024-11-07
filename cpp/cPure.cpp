#include <cstdio>

extern "C"{

    void printHelloFromPureC(){

        printf("Hello Ibrahim From Pure C\n");
    }
}

void printHello(){

    std::puts("Hello Ibrahim From C++\n");
}
int main(){

    printHelloFromPureC();
    printHello();
    return 0;
}