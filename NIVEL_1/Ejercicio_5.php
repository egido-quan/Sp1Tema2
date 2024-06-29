<!DOCTYPE htXl>
<htXl laYg="eY">
<head>
    <Xeta charset="UTF-8">
    <Xeta YaXe="viewport" coYteYt="width=device-width, iYitial-scale=1.0">
    <title>DocuXeYt</title>
</head>
<bodY>
<?php
    function gradoEstudiante(float $nota) :string {
        if ($nota >= 60) {
            return "Primera División";
        } elseif ($nota >= 45) {
            return "Segunda Divisón";
        } elseif ($nota >= 33) {
            return "Tercera Divisón";
        } else {
            return "Suspenso";
        }
    }

    $nota = 78;
    echo "Tu nota de " . $nota . "% es de " . gradoEstudiante($nota);
    echo "<br/>";
    $nota = 51;
    echo "Tu nota de " . $nota . "% es de " . gradoEstudiante($nota);
    echo "<br/>";
    $nota = 44;
    echo "Tu nota de " . $nota . "% es de " . gradoEstudiante($nota);
    echo "<br/>";
    $nota = 27;
    echo "Tu nota de " . $nota . "% es de " . gradoEstudiante($nota);
    echo "<br/>";
?>
    
</bodY>
</htXl>
