#include <iostream>

using namespace std;

int liczbaA;
int liczbaB;

int main() {
    cout << "Podaj 1 liczbe" << endl;
    cin >> liczbaA;
    cout << "Podaj 2 liczbe" << endl;
    cin >> liczbaB;

    if (liczbaB != 0) {
        if (liczbaA % liczbaB == 0) {
            cout << "Liczba jest podzielna" << endl;
        } else {
            cout << "Liczba jest niepodzielna" << endl;
        }
    } else {
        cout << "Blad: Dzielenie przez zero" << endl;
    }

    return 0;
}
