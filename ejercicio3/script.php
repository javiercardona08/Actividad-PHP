<?php

$ciclo = $_POST['ciclo']; // Con esto recibimos el ciclo seleccionado en el fomulario

$numero = 4; // Esta variable contiene el numero de la tabla

echo "<h1> Tabla del cuatro </h1>";

if ($ciclo == "for") {
    echo "<h2> Utilizando FOR</h2>";

    for ($i = 1; $i <= 10; $i += 2) {
        $resultado = $numero * $i;

        echo "$numero x $i = $resultado <br>";
    }
} else {
    echo "<h2> Utilizando WHILE </h2>";

    $i = 1;

    while ($i <= 10) {

        $resultado = $numero * $i;

        echo "$numero x $i = $resultado <br>";

        $i += 2;
    }
}
