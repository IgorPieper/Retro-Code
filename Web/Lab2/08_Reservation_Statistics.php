<?php

echo "<h1><center>Punkt 9</center></h1>";

$conf = new mysqli("localhost", "root", "", "kino") 
    or die("Nie ma kina przez COVIDa, więc zamawiaj jedzenie z Gowida");

echo "<h3>Rezerwacje dla filmu 'Za Siedmioma Krasnoludkami'</h3>";

$wynik = $conf->query("SELECT count(seans.id) 
                       FROM seans, film 
                       WHERE film.tytul='Za Siedmioma Krasnoludkami' 
                       AND id_film = film.id");

while ($nazwa = $wynik->fetch_assoc()) {
    echo $nazwa["count(seans.id)"] . "<br />";
}

echo "<h3>Rezerwacje dla filmu 'Historia Prawdziwa'</h3>";

$wynik = $conf->query("SELECT count(seans.id) 
                       FROM seans, film 
                       WHERE film.tytul='Historia Prawdziwa' 
                       AND id_film = film.id");

while ($nazwa = $wynik->fetch_assoc()) {
    echo $nazwa["count(seans.id)"] . "<br />";
}

echo "<h3>Rezerwacje dla filmu 'Za Tobą'</h3>";

$wynik = $conf->query("SELECT count(seans.id) 
                       FROM seans, film 
                       WHERE film.tytul='Za Tobą' 
                       AND id_film = film.id");

while ($nazwa = $wynik->fetch_assoc()) {
    echo $nazwa["count(seans.id)"] . "<br />";
}

?>
