<?php

$conf = new mysqli("localhost", "root", "", "sklep") or die("Nie działa!");

$wynik = $conf->query("SELECT nazwa FROM produkt WHERE cena<10.5 AND ilosc>=50");

$liczba = 1;

while ($nazwa = $wynik->fetch_assoc()) {
    echo "<h2>" . $liczba . ". " . $nazwa["nazwa"] . "</h2><br />";
    $liczba++;
}

?>
