#include <iostream>

using namespace std;

int a;
int b;
int c;

int main() {
    cout << "Podaj dlugosc a: " << endl;
    cin >> a;
    cout << "Podaj dlugosc b: " << endl;
    cin >> b;
    cout << "Podaj dlugosc c: " << endl;
    cin >> c;

    int pole = 2 * a * b + 2 * a * c + 2 * b * c;

    cout << "Pole prostopadloscianu wynosi: " << pole << endl;

    return 0;
}
