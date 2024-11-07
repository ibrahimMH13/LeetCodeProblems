#include <iostream>
class Student {
    public :
    Student(): name(""), studentNumber(0), promtion(""){

    }

    void setName(const std::string& name){

        this->name = name;
    }

    void setStudentNumber(int num){

        this->studentNumber = num;
    }

    void setPromtion(const std::string& promtion){

        this->promtion = promtion;
    }

    std::string getName() const {

        return name;
    }

    std::string getPromtion() const {

        return promtion;
    }

    int getStudentNumber() const {

        return studentNumber;
    }

    private:
    std::string name;
    int studentNumber;
    std::string promtion;
};

int main(){

    auto studentList = [2];
    Student std1;
    std1.setName("ibrahim");
    std1.setPromtion("ITYA22");
    std1.setStudentNumber(20242100);
    studentList[] = std1;
    Student* std2 = new Student();
    std2->setName("Jully");
    std2->setPromtion("MBA'23");
    std2->setStudentNumber(20302200);
    studentList[] = std2;
    std::cout << std1.getName() << "\n";
    std::cout << std1.getPromtion() << "\n";
    std::cout << std1.getStudentNumber() << "\n";

    std::cout << "\n------------------------------\n";

    std::cout << std2->getName() << "\n";
    std::cout << std2->getPromtion() << "\n";
    std::cout << std2->getStudentNumber() << "\n";

    delete std2;
}