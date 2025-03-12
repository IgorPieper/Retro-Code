<?php

$conf = new mysqli("localhost", "root", "", "koniec") or die("Die");

$wynik = $conf->query("SELECT uczniowie.id, uczniowie.imie, uczniowie.nazwisko, oceny.ocena 
                       FROM uczniowie 
                       JOIN oceny ON uczniowie.id = oceny.id_uczniowie 
                       WHERE uczniowie.id IN (1, 2) 
                       ORDER BY uczniowie.id");

$previous_student = "";

while ($nazwa = $wynik->fetch_assoc()) {
    $current_student = $nazwa["imie"] . " " . $nazwa["nazwisko"];

    if ($current_student !== $previous_student) {
        if ($previous_student !== "") {
            echo "<br>";
        }
        echo $current_student . ": ";
        $previous_student = $current_student;
    }

    echo $nazwa["ocena"] . ", ";
}

?>
