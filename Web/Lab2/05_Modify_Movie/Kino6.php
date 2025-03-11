<?php

echo "<h1><center>Punkt 6</center></h1>";

$film = $_POST["film"];
$zmien = $_POST["zmien"];
$nowe = $_POST["nowe"];

$conf = new mysqli("localhost", "root", "", "kino") 
    or die("Nie ma kina przez COVIDa, więc zamawiaj jedzenie z Gowida");

$wynik = $conf->query("UPDATE film SET $zmien='$nowe' WHERE id='$film'");

echo "Zrobione!!!!";

?>
