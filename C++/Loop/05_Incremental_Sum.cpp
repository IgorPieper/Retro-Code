#include <iostream>

using namespace std;

int main() {
    int i = 1;
    int a = 5;
    int b = 0;

    while (i <= 100) {
        b += a;
        a += 10;
        i++;
    }

    cout << b << endl;

    return 0;
}
