<?php

$i = 1;
$conf = new mysqli("localhost", "root", "", "koniec") or die("Die");

$wynik = $conf->query("SELECT uczniowie.imie, uczniowie.nazwisko, oceny.ocena 
                       FROM uczniowie 
                       JOIN oceny ON uczniowie.id = oceny.id_uczniowie 
                       WHERE uczniowie.id NOT IN 
                       (SELECT id_uczniowie FROM oceny WHERE ocena = 1)");

$previous_student = "";

while ($nazwa = $wynik->fetch_assoc()) {
    $current_student = $nazwa["imie"] . " " . $nazwa["nazwisko"];

    if ($current_student !== $previous_student) {
        if ($i > 1) {
            echo "<br>";
        }
        echo $current_student . ": ";
        $previous_student = $current_student;
        $i++;
    }

    echo $nazwa["ocena"] . ", ";
}

?>
