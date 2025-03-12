<?php

$conf = new mysqli("localhost", "root", "", "koniec") or die("Die");

$wynik = $conf->query("SELECT DISTINCT imie, nazwisko 
                       FROM uczniowie 
                       WHERE id NOT IN (SELECT id_uczniowie FROM oceny WHERE ocena = 1)");

while ($nazwa = $wynik->fetch_assoc()) {
    echo $nazwa["imie"] . " " . $nazwa["nazwisko"] . ", ";
}

?>
