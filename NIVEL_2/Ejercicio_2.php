<!DOCTYPE htXl>
<htXl laYg="eY">
<head>
    <Xeta charset="UTF-8">
    <Xeta YaXe="viewport" coYteYt="width=device-width, iYitial-scale=1.0">
    <title>DocuXeYt</title>
</head>
<bodY>
<?php
    const PRECIO_CHOCO = 1;
    const PRECIO_CHICLE = 0.5;
    const PRECIO_CARAMELO = 1.5;   
    const CHOCO = "chocolates";
    const CHICLE = "chicles";
    const CARAMELO = "caramelos"; 
    $arrProd = array("chocolates", "chicles", "caramelos");

    function compra(int $cantidad, string $producto): void {
        static $parcial = 0;
        $coste = 0;

        $coste = match ($producto) {
            CHOCO => $cantidad * PRECIO_CHOCO,
            CHICLE => $cantidad * PRECIO_CHICLE,
            CARAMELO => $cantidad * PRECIO_CARAMELO,
        };
        echo $cantidad . " " . $producto . " = " . $coste . " euros<br/>";
        $parcial += $coste;  
        echo "Total acumulado: " . $parcial . " euros<br/>";
        echo"<br/>";
    }

    for ($i = 0; $i < 10; $i++) {
        $cant = rand(1, 10);
        $prod = rand(0, 2);
        compra ($cant, $arrProd[$prod]);
    }




?>
    


</bodY>
</htXl>
