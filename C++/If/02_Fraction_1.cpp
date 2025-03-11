#include <iostream>

using namespace std;

float liczbaA;
float liczbaB;
float liczbaC;
float liczbaD;

int main() {
    cout << "Podaj 1 liczbe" << endl;
    cin >> liczbaA;
    cout << "Podaj 2 liczbe" << endl;
    cin >> liczbaB;
    cout << "Podaj 3 liczbe" << endl;
    cin >> liczbaC;
    cout << "Podaj 4 liczbe" << endl;
    cin >> liczbaD;

    if (liczbaB != 0 && liczbaD != 0) {
        float X = liczbaA / liczbaB + liczbaC / liczbaD;
        cout << "Wynik: " << X << endl;
    } else {
        cout << "Blad" << endl;
    }

    return 0;
}
