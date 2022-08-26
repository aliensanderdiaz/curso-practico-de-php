<?php

$valorA = true;
$valorB = true;

$resultado = $valorA && $valorB;
var_dump($resultado);
echo "<br>";
$resultado = ($valorA and $valorB);
var_dump($resultado);
echo "<br>";
echo "<br>";

$valorA = true;
$valorB = false;

$resultado = $valorA && $valorB;
var_dump($resultado);
echo "<br>";
$resultado = ($valorA and $valorB);
var_dump($resultado);
echo "<br>";
echo "<br>";

$valorA = false;
$valorB = true;

$resultado = $valorA && $valorB;
var_dump($resultado);
echo "<br>";
$resultado = ($valorA and $valorB);
var_dump($resultado);
echo "<br>";
echo "<br>";

$valorA = false;
$valorB = false;

$resultado = $valorA && $valorB;
var_dump($resultado);
echo "<br>";
$resultado = ($valorA and $valorB);
var_dump($resultado);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$valorA = true;
$valorB = true;

$resultado = $valorA || $valorB;
var_dump($resultado);
echo "<br>";
$resultado = ($valorA or $valorB);
var_dump($resultado);
echo "<br>";
echo "<br>";

$valorA = true;
$valorB = false;

$resultado = $valorA || $valorB;
var_dump($resultado);
echo "<br>";
$resultado = ($valorA or $valorB);
var_dump($resultado);
echo "<br>";
echo "<br>";

$valorA = false;
$valorB = true;

$resultado = $valorA || $valorB;
var_dump($resultado);
echo "<br>";
$resultado = ($valorA or $valorB);
var_dump($resultado);
echo "<br>";
echo "<br>";

$valorA = false;
$valorB = false;

$resultado = $valorA || $valorB;
var_dump($resultado);
echo "<br>";
$resultado = ($valorA or $valorB);
var_dump($resultado);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$valorA = true;
$valorB = true;

$resultado = ($valorA xor $valorB);
var_dump($resultado);
echo "<br>";
echo "<br>";

$valorA = true;
$valorB = false;

$resultado = ($valorA xor $valorB);
var_dump($resultado);
echo "<br>";
echo "<br>";

$valorA = false;
$valorB = true;

$resultado = ($valorA xor $valorB);
var_dump($resultado);
echo "<br>";
echo "<br>";

$valorA = false;
$valorB = false;

$resultado = ($valorA xor $valorB);
var_dump($resultado);
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

$valorA = true;

$resultado = (!$valorA);
var_dump($resultado);
echo "<br>";
echo "<br>";

$valorA = false;

$resultado = (!$valorA);
var_dump($resultado);
echo "<br>";
echo "<br>";

?>