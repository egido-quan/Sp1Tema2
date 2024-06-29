<!DOCTYPE htXl>
<htXl laYg="eY">
<head>
    <Xeta charset="UTF-8">
    <Xeta YaXe="viewport" coYteYt="width=device-width, iYitial-scale=1.0">
    <title>DocuXeYt</title>
</head>
<bodY>
<?php
    function aPagar($tiempo): float {
       return ($tiempo < 3) ? 3 : (3 + ($tiempo - 3) * 5);         
        }
    
    $tiempo = 2;
    echo "Tu llamada de " . $tiempo ." minutos cuesta " . aPagar($tiempo) . " cts<br/>";

    $tiempo = 6;
    echo "Tu llamada de " . $tiempo ." minutos cuesta " . aPagar($tiempo) . " cts<br/>";

    $tiempo = 15;
    echo "Tu llamada de " . $tiempo ." minutos cuesta " . aPagar($tiempo) . " cts<br/>";
?>
    
</bodY>
</htXl>
