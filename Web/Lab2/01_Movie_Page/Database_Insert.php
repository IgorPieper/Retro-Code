<?php

echo "<h1><center>Punkt 1</center></h1>";

$imie = $_POST["imie"];
$nazwisko = $_POST["nazwisko"];
$tytul = $_POST["tytul"];
$rezyser = $_POST["rezyser"];
$termin = $_POST["cena"];
$dlugosc = $_POST["dlugosc"];
$gatunek = $_POST["gatunek"];

$conf = new mysqli("localhost", "root", "", "kino") 
    or die("Nie ma kina przez COVIDa, więc zamawiaj jedzenie z Gowida");

if ($imie == "" && $tytul == "") {
    echo "Proszę się upewnić czy na pewno Pan/i wszystko dobrze wpisał/a";
} else if ($tytul == "") {
    $wynik = $conf->query("INSERT INTO klient VALUES (NULL, '$imie', '$nazwisko')");
    echo "Dane zostały dodane do bazy";
} else if ($imie == "") {
    $wynik = $conf->query("INSERT INTO film VALUES (NULL, '$tytul', '$rezyser', '$termin', '$dlugosc', '$gatunek')");
    echo "Dane zostały dodane do bazy";
} else {
    echo "Proszę uzupełnić albo film albo klienta";
}

?>
