<?php

$preguntas = [
    1 => ["¿Cuál es tu nombre?", "text"],
    2 => ["¿Qué edad tienes?", "number"],
    3 => ["¿Cuál es tu hobby favorito?", "text"],
    4 => ["¿Qué tipo de música te gusta escuchar?", "text"],
    5 => ["¿Te gusta ver películas o series? ¿Cuál es tu género favorito?", "text"],
    6 => ["¿Qué actividad te gustaría aprender a realizar?", "text"],
    7 => ["¿Tocas algún instrumento musical? ¿Cuál?", "text"],
    8 => ["¿Cuántas horas al día utilizas el celular?", "number"],
    9 => ["¿Qué haces normalmente en tu tiempo libre?", "text"],
    10 => ["¿Prefieres realizar actividades solo o acompañado?", "text"]
];

if (isset($_POST['iniciar'])) {

    $encuestados = (int) $_POST['encuestados'];

    ?>

    <style>

        body {
            font-family: Arial, sans-serif;
                background-color: #f1f5f9;
                margin: 0;
                padding: 30px;
        }

        h1 {
                text-align: center;
                color: #1e293b;
            }

            .descripcion {
                text-align: center;
                color: #64748b;
                margin-bottom: 30px;
            }

    </style>

    <?php

    echo "<h1>Encuesta: Tiempo libre de los jóvenes</h1>";

    echo "<form action='script.php' method='POST'>";

    echo "<input type='hidden' name='encuestados' value='$encuestados'>";

    for ($i = 1; $i <= $encuestados; $i++) {

        echo "<h2>Encuestado $i</h2>";

        for ($j = 1; $j <= 10; $j++) {

            echo $preguntas[$j][0] . "<br>";

            if ($preguntas[$j][1] == "number") {

                echo "<input type='number' step='any' name='respuestas[$i][$j]' required>";

            } else {

                echo "<input type='text' name='respuestas[$i][$j]' required>";

            }

            echo "<br><br>";
        }
    }

    echo "<input type='submit' value='Finalizar' name='finalizar'>";

    echo "</form>";
}

if (isset($_POST['finalizar'])) {

    $encuestados = (int) $_POST['encuestados'];

    $respuestas = $_POST['respuestas'];

    $suma_horas = 0;

    for ($i = 1; $i <= $encuestados; $i++) {

        $suma_horas += (float) $respuestas[$i][8];

    }

    $promedio = $suma_horas / $encuestados;

    echo "<h1>Resultados de la encuesta</h1>";

    echo "Cantidad de encuestados: $encuestados <br><br>";

    echo "Promedio de uso diario del celular: $promedio horas";

}

