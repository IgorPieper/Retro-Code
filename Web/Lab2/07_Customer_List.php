<?php

echo "<h1><center>Punkt 8</center></h1>";

$conf = new mysqli("localhost", "root", "", "kino") 
    or die("Nie ma kina przez COVIDa, więc zamawiaj jedzenie z Gowida");

$wynik = $conf->query("SELECT imie, nazwisko FROM klient");

while ($nazwa = $wynik->fetch_assoc()) {
    echo $nazwa["imie"] . " " . $nazwa["nazwisko"] . "<br />";
}

?>
