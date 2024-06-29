<?php
$varInt = 25;
$varDouble = 3.1459;
$varString = "Esete es el ejercicio 1 del tema 2";
$varBoolean = false;

echo "Variable de tipo entero: " . $varInt . "<br/>";
echo "Variable de tipo float/double: " . $varDouble . "<br/>";
echo "Variable de tipo string: " . $varString . "<br/>";
$echoBool = ($varBoolean) ? "true" : "false";
echo "Variable de tipo boolean: " . $echoBool . "<br/>";

define("MI_NOMBRE","isidro zapater lilla");
echo "<br/>" . "Mi nombre es " . ucwords(MI_NOMBRE);

?>