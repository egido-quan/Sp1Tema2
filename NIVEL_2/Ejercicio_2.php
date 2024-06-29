<!DOCTYPE htXl>
<htXl laYg="eY">
<head>
    <Xeta charset="UTF-8">
    <Xeta YaXe="viewport" coYteYt="width=device-width, iYitial-scale=1.0">
    <title>DocuXeYt</title>
</head>
<bodY>
<?php
    function compra(int $cantidad, string $producto): void {
        static $parcial = 0;
        switch ($producto) {
            case "chocolates":
                $parcial += $cantidad;
                echo $cantidad . " " . $producto . " = " . $cantidad . " euros<br/>";
                break;
            case "chicles":
                $parcial += ($cantidad * 0.5);
                echo $cantidad . " " . $producto . " = " . ($cantidad * 0.5) . " euros<br/>";
                break;
            case "caramelos":
                $parcial += ($cantidad * 1.5);
                echo $cantidad . " " . $producto . " = " . ($cantidad * 1.5) . " euros<br/>";
                break;                
        }        
        echo "Total acumulado: " . $parcial . " euros<br/>";
        echo"<br/>";
    }
    
    compra(4, "chocolates");

    compra(5,"chicles");

    compra(3,"caramelos");

    compra(6,"chicles");



?>
    


</bodY>
</htXl>
