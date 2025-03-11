#include <iostream>

using namespace std;

class Dinozaur {
private:
    string gatunek;
    string podwodny;

public:
    void ustalGatunek(string jaki_gatunek) {
        gatunek = jaki_gatunek;
    }

    void ustawPodwodny(string jest_podwodny) {
        podwodny = jest_podwodny;
    }

    string jakiGatunek() {
        return gatunek;
    }

    string czyPodwodny() {
        return podwodny;
    }

    void ryk(int ile) {
        cout << endl;
        for (int i = 0; i < ile; i++) {
            cout << "Wrrrrrrrrr ";
        }
        cout << endl << endl << endl;
    }
};

int main() {
    Dinozaur Jurek;
    Jurek.ustalGatunek("Tyranozaur");
    Jurek.ustawPodwodny("Nie");

    string gatunek = Jurek.jakiGatunek();
    string podwodny = Jurek.czyPodwodny();

    cout << endl << "Gatunek: " << gatunek << ", Zyje w wodzie?: " << podwodny << endl << endl;
    Jurek.ryk(5);

    return 0;
}
