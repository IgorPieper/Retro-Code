<?php

echo "<h1><center>Punkt 7</center></h1>";

$conf = new mysqli("localhost", "root", "", "kino") 
    or die("Nie ma kina przez COVIDa, więc zamawiaj jedzenie z Gowida");

// Wysyłanie zapytania do bazy
$wynik = $conf->query("SELECT tytul FROM film");

// Wyświetlanie wyników
while ($nazwa = $wynik->fetch_assoc()) {
    echo $nazwa["tytul"] . "<br />";
}

?>
