#include <iostream>

enum class Color { red = 100, blue = 110, green =120}; 
enum Light { green, yellow =220, red =200 };
int main(){

    Color address = Color::red;
    Color car = Color::blue;
    Light frontLight = Light::yellow;

    std::cout << static_cast<int>(Color::red) << "\n";
    std::cout << static_cast<int>(Light::red) << "\n";
    std::cout << static_cast<int>(address) << "\n";
    std::cout << static_cast<int>(car) << "\n";
     std::cout << static_cast<int>(frontLight) << "\n";
    return 0;
}