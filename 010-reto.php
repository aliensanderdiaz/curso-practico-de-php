<?php

$edades = array(4,6,10);

function bodega($edad) {
    $mensaje = "El estudiante con $edad años tendrá sus juguetes en la parte ";
    if ($edad < 5) {
        $mensaje .= "inferior";
    } elseif ($edad >= 5 && $edad <= 7) {
        $mensaje .= "media";
    } else {
        $mensaje .= "alta";
    }
    $mensaje .= " de la bodega.";
    return $mensaje;
}

foreach ($edades as $edad) {
    echo bodega($edad);
    echo "<br>";
}

echo "<br>";
echo "<br>";
echo "<br>";

function medio_arbolito($alto) {
    for ($i=1; $i <= $alto ; $i++) {
        $renglon = "";
        for ($j=0; $j < $i; $j++) { 
            $renglon .= "*";
        }
        echo $renglon . "<br>";
    }
}

medio_arbolito(10);