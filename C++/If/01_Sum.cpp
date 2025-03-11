#include <iostream>

using namespace std;

int liczba1;
int liczba2;
int liczba3;

int main() {
    cout << "Podaj 1 liczbe: " << endl;
    cin >> liczba1;
    cout << "Podaj 2 liczbe: " << endl;
    cin >> liczba2;
    cout << "Podaj 3 liczbe: " << endl;
    cin >> liczba3;

    // Obliczenie sumy trzech liczb
    int suma = liczba1 + liczba2 + liczba3;

    cout << "Suma wynosi: " << suma << endl;

    return 0;
}
