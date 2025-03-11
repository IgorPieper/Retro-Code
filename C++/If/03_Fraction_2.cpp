#include <iostream>

using namespace std;

float liczbaA;
float liczbaB;

int main() {
    cout << "Podaj 1 liczbe" << endl;
    cin >> liczbaA;
    cout << "Podaj 2 liczbe" << endl;
    cin >> liczbaB;

    if (liczbaB != 4) {
        float X = (liczbaA + 6) / (liczbaB - 4);
        cout << "Wynik: " << X << endl;
    } else {
        cout << "Blad" << endl;
    }

    return 0;
}
