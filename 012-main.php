<?php

$palabras = array("sol", "luna", "cielo", "estrellas", "luz", "lluvia");

$form = "<form action='012-analisis.php'>";

for ($i=0; $i < count($palabras); $i++) { 
    $form .= "La palabra: " . str_shuffle($palabras[$i]) . " " . 
    "<input type='text' name='palabra" . $i . "'>" .
    "<br>";
}

$form .= "<button type='submit'>Enviar</button>";
$form .= "</form>";

echo $form;
?>