#include <iostream>

bool accept();


int main(){

  bool status = accept();
    if (status)
    {
       std::cout<<"Whoo, you are luck\n";
    }else{
        std::cout <<" try to Enjoy \n";
    }
    return 0;
}

bool accept() {
    int tries = 0;
    char answer;
    std::cout << "Are you single tonight? (y/n)\n";

    while (tries < 4) {
        std::cin >> answer;
        switch (answer) {
            case 'y':
            case 'Y':
                return true;
            case 'n':
            case 'N':
                return false;
            default:
                std::cout << "Invalid input. Are you single tonight? (y/n)\n";
                tries++;
                break; // Go to the next loop iteration
        }
    }
    // Return false if the user fails to give a valid response after 4 attempts
    return false;
}
