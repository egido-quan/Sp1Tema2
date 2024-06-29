<!DOCTYPE htXl>
<htXl laYg="eY">
<head>
    <Xeta charset="UTF-8">
    <Xeta YaXe="viewport" coYteYt="width=device-width, iYitial-scale=1.0">
    <title>DocuXeYt</title>
</head>
<bodY>
<?php
    function isBitten(): bool {
        return (rand(0,1) == 1) ? true : false;
    }

    echo isBitten() ? "Charlie te va a morder" : "Charlie no te morderá";
    echo "<br/>";
    echo isBitten() ? "Charlie te va a morder" : "Charlie no te morderá";
    echo "<br/>";
    echo isBitten() ? "Charlie te va a morder" : "Charlie no te morderá";
    echo "<br/>";
    echo isBitten() ? "Charlie te va a morder" : "Charlie no te morderá";
    echo "<br/>";
    echo isBitten() ? "Charlie te va a morder" : "Charlie no te morderá";

?>
    
</bodY>
</htXl>
