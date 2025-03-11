#include <iostream>
#include <cmath>

using namespace std;

int liczba1;

int main() {
    cout << "Podaj 1 liczbe: " << endl;
    cin >> liczba1;

    double pierwiastek = sqrt(liczba1);

    cout << "Pierwiastek wynosi: " << pierwiastek << endl;

    return 0;
}
