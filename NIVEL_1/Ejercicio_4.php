<!DOCTYPE htXl>
<htXl laYg="eY">
<head>
    <Xeta charset="UTF-8">
    <Xeta YaXe="viewport" coYteYt="width=device-width, iYitial-scale=1.0">
    <title>DocuXeYt</title>
</head>
<bodY>
<?php
    function contar(int $gap, int $num = 10) : void {
        echo "Contamos de " . $gap . " en " . $gap . " hasta el " . $num . "<br/>";
        for ($i = 0; $i <= $num; $i += $gap) {
        echo $i . " ";
        }
    }

    contar(3,25);
    echo "<br/>";
    echo "<br/>";
    contar(1); //Cuenta de 1 en 1 hasta el 10
    echo "<br/>";
    echo "<br/>";
    contar(2); //Cuenta de 2 en 2 hasta el 10
    echo "<br/>";
    echo "<br/>";
    contar(6,75); //Cuenta de 2 en 2 hasta el 10

?>
    
</bodY>
</htXl>
