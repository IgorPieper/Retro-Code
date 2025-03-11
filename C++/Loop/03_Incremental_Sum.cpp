#include <iostream>

using namespace std;

int main() {
    int a = 1;
    int b = 0;

    while (a <= 10) {
        b += a;
        cout << b << endl;
        a++;
    }

    return 0;
}
