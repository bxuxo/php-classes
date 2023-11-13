// Online C++ compiler to run C++ program online
#include <iostream>

using namespace std;

class Animal {
public:
    string name;
    int age;
    
    virtual auto eat( ) -> string {
        return "I like food";
    }
    
    Animal(string name, int age) {
        
    }
    
    auto birthday( ) -> void {
        this->age++;
    }
};

class Dog : public Animal {
public:
    auto eat( ) -> string override {
        return "I like bones";
    }
    
    Dog(string name, int age) : Animal(name, age) {
        
    }
};

int main() {
    Dog dog = Dog("Reksis", 6);
    cout << dog.eat( );

    return 0;
}
