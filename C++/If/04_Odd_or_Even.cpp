#include <iostream>

using namespace std;

int liczbaA;

int main() {
    cout << "Podaj 1 liczbe" << endl;
    cin >> liczbaA;

    if (liczbaA % 2 == 0) {
        cout << "Liczba jest parzysta" << endl;
    } else {
        cout << "Liczba jest nieparzysta" << endl;
    }

    return 0;
}
