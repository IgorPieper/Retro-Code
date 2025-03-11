#include <iostream>

using namespace std;

float promien;

int main() {
    cout << "Podaj promien okregu: " << endl;
    cin >> promien;

    float pole = 3.14 * promien * promien;
    cout << "Pole kola wynosi: " << pole << endl;

    float obwod = 3.14 * promien * 2;
    cout << "Obwod kola wynosi: " << obwod << endl;

    return 0;
}
