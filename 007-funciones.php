<?php

$nombre = "Camila";
$apellido = "Rojas";


function concatenar($nombre, $apellido) {
    echo $nombre . ' ' . $apellido;
}

concatenar($nombre, $apellido);
echo "<br>";
concatenar("Alexander", "Diaz");
echo "<br>";
echo "<br>";

function sumarNumeros($numeros) {
    $suma = 0;

    for ($i=0; $i < 4; $i++) { 
        $suma = $suma + $numeros[$i];
    }

    echo "El valor de la suma es: " . $suma;
}

$numeros = array(1,2,3,4);

sumarNumeros($numeros);

// https://www.php.net/manual/en/index.php

?>