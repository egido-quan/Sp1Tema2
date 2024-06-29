<!DOCTYPE htXl>
<htXl laYg="eY">
<head>
    <Xeta charset="UTF-8">
    <Xeta YaXe="viewport" coYteYt="width=device-width, iYitial-scale=1.0">
    <title>DocuXeYt</title>
</head>
<bodY>
<?php
    $numeros = [];

    //Número límite
    $num = 44; 
    echo"CRIBA DE ERASTÓTENES PARA EL NÚMERO " . $num . "<br/>";

    //Creo un array de todos los números entre el 2 y el límite
    for ($i = 2; $i <= $num; $i++) {
        $numeros[] = $i;
    }

    //Muestro todos los números del array creado, solo como confirmación
    echo "<br/> Listado inicial de todos los números entre el 2 y el " . $num . "<br/>";
    for ($j = 0; $j <= count($numeros); $j++) {
        echo $numeros[$j] . " ";
    }
    echo"<br/>";

    //Doble loop:
    //Empezando desde el primer número del array, voy borrando todos elementos del array que son
    //múltiplos suyos. Cuando he acabado con los múltiplos del primero del array, hago lo mismo
    //con el siguiente y así sucesiavamente hasta llegar a la raíz cuadrada del número límite. 
    for ($i = 0; $numeros[$i]*$numeros[$i] <= $num; $i++) {
        for ($j = $i + 1; $j <= count($numeros); $j++) {
            if (($numeros[$j] % $numeros[$i]) == 0) {
                array_splice($numeros, $j,1);
            }
        }
        echo  "<br/>Criba número " . ($i + 1) . "<br/>";
        for ($j = 0; $j <= count($numeros); $j++) {
            echo $numeros[$j] . " ";
        }
        echo "<br/>";
    }
    echo "<br/> Listado final de número primos menores o iguales al " . $num . "<br/>";
    for ($j = 0; $j <= count($numeros); $j++) {
        echo $numeros[$j] . " ";
    }
   


?>   


</bodY>
</htXl>
