#include <iostream>
#include <string>
class UserAccount{
    
    private:
    std::string owner;
    int balance;

    public:
    UserAccount(std::string name, double amount): owner(name), balance(amount){}

    UserAccount& operator+= (double amount){
            if (amount < 0)
            {
                 std::cerr << "Invalid deposit amount!\n";
            }else{

                balance += amount;
            }

            return *this;
            
    }

    void getBalance(){

        std::cout <<"current balance of "  << owner << " is #" << balance << "#\n";
    }
};

int main(){

    UserAccount myAccount("ibrhaim mh",500000);
    myAccount.getBalance();
    myAccount+=1000000;
    myAccount.getBalance();
    return 0;
}