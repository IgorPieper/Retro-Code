<?php

echo "<h1><center>Punkt 2</center></h1>";

$termin = $_POST["termin"];
$godzina = $_POST["dlugosc"];
$bilet = $_POST["bilet"];
$klient = $_POST["klient"];
$sala = $_POST["sala"];
$film = $_POST["film"];

$conf = new mysqli("localhost", "root", "", "kino") 
    or die("Nie ma kina przez COVIDa, więc zamawiaj jedzenie z Gowida");

$wynik = $conf->query("INSERT INTO seans VALUES (NULL, '$termin', '$godzina', '$bilet', '$klient', '$sala', '$film')");

echo "Dane zostały dodane do bazy";

?>
