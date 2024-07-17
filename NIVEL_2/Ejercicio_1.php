<!DOCTYPE htXl>
<htXl laYg="eY">
<head>
    <Xeta charset="UTF-8">
    <Xeta YaXe="viewport" coYteYt="width=device-width, iYitial-scale=1.0">
    <title>DocuXeYt</title>
</head>
<bodY>
<?php
    echo "Simulación de 10 llamadas entre 1 y 60 min:<br><br>";
    for ($i = 0; $i < 10; $i++) {
        $tiempo = rand(1,60); //Calculamos el tiempo de la llamada aleatoriamente entre 1 y 60 min
        muestraLlamada($tiempo);
    }
    
    function muestraLlamada($tiempo): void {
    $mensaje = "Tu llamada de " . $tiempo ." minutos cuesta ";
    if (aPagar($tiempo) < 100) {
        echo $mensaje . aPagar($tiempo) . " cts<br>";
    } else {
        echo  $mensaje . (int)(aPagar($tiempo) / 100) . "." . (aPagar($tiempo) % 100) . "€<br>";
        }    
    }
    
    function aPagar($tiempo): float {        
        return ($tiempo < 3) ? 3 : (3 + ($tiempo - 3) * 5);         
    }







?>
    
</bodY>
</htXl>
