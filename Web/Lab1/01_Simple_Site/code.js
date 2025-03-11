var kolor = 1;

function banner() {
    if (kolor == 1) {
        document.getElementById("banner").style.backgroundColor = "green";
        kolor--;
    } else {
        document.getElementById("banner").style.backgroundColor = "black";
        kolor++;
    }
}
