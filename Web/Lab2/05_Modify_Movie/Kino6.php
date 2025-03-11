<?php

echo "<h1><center>Punkt 5</center></h1>";

$numer = $_POST["numer"];
$zmien = $_POST["zmien"];
$nowe = $_POST["nowe"];

$conf = new mysqli("localhost", "root", "", "kino") 
    or die("Nie ma kina przez COVIDa, więc zamawiaj jedzenie z Gowida");

$wynik = $conf->query("UPDATE klient SET $zmien='$nowe' WHERE id='$numer'");

echo "Zrobione!!!!";

?>
