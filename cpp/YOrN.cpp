#include <iostream>

void accept();

int main(){

	accept();
	
	return 0;
}




void accept(){

	std::cout << "Do you would like to procced? (Y/N)\n";

	char anwser;

	std::cin >> anwser;


	if(anwser == 'y' || anwser == 'Y')
		std::cout << "working on progress\n";
	else
		std::cout <<"Programe is exit, Bye\n";
}