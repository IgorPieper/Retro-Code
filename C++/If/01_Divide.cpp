#include <iostream>

using namespace std;

float liczbaA;
float liczbaB;

int main() {
    cout << "Podaj 1 liczbe" << endl;
    cin >> liczbaA;
    cout << "Podaj 2 liczbe" << endl;
    cin >> liczbaB;

    if (liczbaB != 0) {
        float X = liczbaA / liczbaB;
        cout << "Wynik: " << X << endl;
    } else {
        cout << "Blad" << endl;
    }

    return 0;
}
