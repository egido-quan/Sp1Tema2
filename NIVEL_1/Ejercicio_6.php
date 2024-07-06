<!DOCTYPE htXl>
<htXl laYg="eY">
<head>
    <Xeta charset="UTF-8">
    <Xeta YaXe="viewport" coYteYt="width=device-width, iYitial-scale=1.0">
    <title>DocuXeYt</title>
</head>
<bodY>
<?php

    mordidasDiariasdeCharlie(); 


    function isBitten(): bool {
        return (rand(0,1) == 1) ? true : false;
    }

    function mordidasDiariasdeCharlie(): void {
        $mordidas = 0;
        echo "<h3>Cómo se portará hoy Charlie (estimación)?</h3>";
        for ($i = 10; $i <= 22; $i += 2) {
            echo "A las $i.00: ";
            if (isBitten()) {
                $mordidas++;
                echo "Charlie te va a morder";
            } else { 
                echo "Charlie no te morderá";
                }
            echo "<br>";
        }
        $mensaje = "<br>Hoy Charlie te morderá $mordidas veces. ";

        if ($mordidas < 3) {
            $coment = "Qué perro tan juguetón.";
            } elseif ($mordidas < 5) {
                $coment = "Perrito malo.";
            } else {
                $coment = "Perro cabrón!";
            }
        echo $mensaje . $coment;
    }

      


?>
    
</bodY>
</htXl>
