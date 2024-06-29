<?php
$saludo = "Hello World!";
echo $saludo  . "<br/>";
echo "<br/>";

echo strtoupper($saludo)  . "<br/>";
echo "La longitud del string es: " . strlen($saludo) . " caracteres"  . "<br/>";
echo "El string invertido es: " . strrev($saludo) . "<br/>";
$presentacion = "Aquest és el curs de PHP" . "<br/>";
echo $saludo . $presentacion;
?>