#include <iostream>

using namespace std;

int liczba1;
int liczba2;

int main() {
    cout << "Podaj 1 liczbe: " << endl;
    cin >> liczba1;
    cout << "Podaj 2 liczbe: " << endl;
    cin >> liczba2;

    int suma = liczba1 + liczba2;
    cout << "Suma wynosi: " << suma << endl;

    int roznica = liczba1 - liczba2;
    cout << "Roznica wynosi: " << roznica << endl;

    int iloczyn = liczba1 * liczba2;
    cout << "Iloczyn wynosi: " << iloczyn << endl;

    return 0;
}
