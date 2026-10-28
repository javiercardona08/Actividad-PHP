<?php


$accion = $_POST['numero'];
$numero = $_POST['numero'];

    $numeroInvertido = strrev($accion);

    echo '<h2>Resultado de inversión</h2>';
    echo "<p><strong>Número digitado:</strong> {$accion}</p>";
    echo "<p><strong>Número invertido:</strong> {$numeroInvertido}</p>";
  

function esPrimo($n) {
$raiz = sqrt($n); // Corta el camino. No hace falta buscar divisores más allá de su raíz cuadrada.

    // Este bucle intenta dividir el número entre 2, luego entre 3, luego entre 4... hasta llegar a la raíz.
    for ($i = 2; $i <= $raiz; $i++) {
        if ($n % $i == 0) { 
           return false; // Si el residuo (%) es 0, la división es exacta. ¡No es primo! Rompe el código aquí.
        }
    } return true; // Si probó con todos los números y ninguno lo dividió exactamente, ¡es primo!
}
echo"<h2> Numeros primos encontrados hasta: {$numero} <h2>";
for ($i = 2; $i < $numero; $i++) {
        // Usamos tu función original para evaluar cada número $i
        if (esPrimo($i)) {
            echo $i . " , ";
        }
    }

   
?>
