<?php

$conf = new mysqli("localhost", "root", "", "sklep") or die("Nie działa!");

$wynik = $conf->query("SELECT produkt.nazwa, produkt.cena 
                       FROM produkt, kategoria, producent 
                       WHERE kategoria.id = produkt.kategoria_id 
                       AND kategoria.nazwa = 'Kategoria 2' 
                       AND producent.id = produkt.producent_id 
                       AND producent.nazwa = 'Producent 1'");

$liczba = 1;

while ($nazwa = $wynik->fetch_assoc()) {
    echo "<h2>" . $liczba . ". " . $nazwa["nazwa"] . "</h2><br />";
    $liczba++;
}

?>
