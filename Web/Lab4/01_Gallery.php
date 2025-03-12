<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Galeria</title>
    <style>
        html, body {
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: black;
            float: left;
        }
        img {
            width: 31.5%;
            border: solid white 10px;
        }
    </style>
</head>
<body>

    <div class="galerianka">
        <?php
        $conf = new mysqli("localhost", "root", "", "witryna") or die("Tak mi przykro, tyle, że nie");
        $wynik = $conf->query("SELECT nazwa FROM foto");

        while ($nazwa = $wynik->fetch_assoc()) {
            echo "<img src='images/" . $nazwa['nazwa'] . ".png' />";
        }
        ?>
    </div>

</body>
</html>
