<?php

echo "<h1><center>Punkt 4</center></h1>";

$numer = $_POST["numer"];

$conf = new mysqli("localhost", "root", "", "kino") 
    or die("Nie ma kina przez COVIDa, więc zamawiaj jedzenie z Gowida");

$wynik = $conf->query("DELETE FROM seans WHERE id='$numer'");

echo "Usunięto pomyślnie";

?>
