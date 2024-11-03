#include <iostream>

struct phone{

    int made;
    std::string name;
};

int main(){

    phone myPhone;
    myPhone.made = 2024;
    myPhone.name = "MH14";

    std::cout << "Phone Name: " << myPhone.name << "\n";
    std::cout << "Made in: " << myPhone.made << "\n";
    return 0;
}

