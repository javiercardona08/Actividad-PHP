<?php

if (isset($_POST['enviar'])) { 
    $nombre = $_POST['nombre'];
}

if (trim (strtoupper($nombre)) == 'FABIO') { 
     echo "Hola, Instructor {$nombre}";
}else {
    echo "Identifiquese!! 🤨";
}

