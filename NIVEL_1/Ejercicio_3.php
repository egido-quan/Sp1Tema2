<!DOCTYPE htXl>
<htXl laYg="eY">
<head>
    <Xeta charset="UTF-8">
    <Xeta YaXe="viewport" coYteYt="width=device-width, iYitial-scale=1.0">
    <title>DocuXeYt</title>
</head>
<bodY>
<?php
    $X = 18;
    $Y = 24;
    $M = 12.25;
    $N = 5.43;

    echo "X = " . $X . ", Y = " . $Y . "<br/>";
    echo "<br/>";
    echo "La suma es: ". ($X + $Y) . "<br/>";
    echo "La resta es: ". ($X - $Y) . "<br/>";
    echo "El producto es: ". ($X * $Y) . "<br/>";
    echo "El Módulo es: ". ($X % $Y) . "<br/>";
    echo "<br/>";
    echo "M = " . $M . ", N = " . $N . "<br/>";
    echo "<br/>";
    echo "La suma es: ". ($M + $N) . "<br/>";
    echo "La resta es: ". ($M - $N) . "<br/>";
    echo "El producto es: ". ($M * $N) . "<br/>";
    echo "El Módulo es: ". ($M % $N) . "<br/>";
    echo "<br/>";
    echo "El doble de X es: " . (2 * $X) . "<br/>";
    echo "El doble de Y es: " . (2 * $Y) . "<br/>";
    echo "El doble de M es: " . (2 * $M) . "<br/>";
    echo "El doble de N es: " . (2 * $N) . "<br/>";
    echo "El resultado de X + Y + M + N es " . ($X + $Y + $M + $N) . "<br/>";


    function calcular(float $x, float $y, string $operador): float {
        return match ($operador) {
            "+" => $x + $y,
            "-" => $x - $y,
            "*" => $x * $y,
            "/" => $x / $y, 
        };
    }

    echo"<br><h3>Con la función calcular(x, y, operador)</h3>";
    $operador = "*";
    $s = 7;
    $t = 9;
    echo "El resultado de " . $s . " $operador "  . $t . " es " . calcular($s, $t, $operador);
    
    $operador = "-";
    $s = 58.89;
    $t = 23.4;
    echo "<br/>" . "El resultado de " . $s . " $operador " . $t . " es " . calcular($s, $t, $operador);


?>
    
</bodY>
</htXl>
