<?php

$palabras = array("sol", "luna", "cielo", "estrellas", "luz", "lluvia");

echo "<br>";

for ($i=0; $i < count($palabras); $i++) { 
    if ($_REQUEST["palabra" . $i] == $palabras[$i]) {
        echo "La palabra ingresada es correcta";
    } else {
        echo "La palabra ingresada es incorrecta, la palabra correcta es: " . $palabras[$i];
    }
    echo "<br>";
}


?>