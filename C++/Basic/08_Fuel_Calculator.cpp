#include <iostream>

using namespace std;

float benzyna;

int main() {
    cout << "Podaj obecna cene benzyny na litr: " << endl;
    cin >> benzyna;

    float cena = benzyna * 28.8;

    cout << "Koszt wyjazdu z Gdanska do Szczecina: " << cena << endl;

    return 0;
}
