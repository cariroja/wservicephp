<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Este es un archivo con extension php, mas solo tiene HTML 
<?php
    $hora = 20;
    if($hora<12)
    {
        print("<p> Bom dia </p>");
    }
    elseif($hora<18)
    {
        print("<p> Boa tarde </P>");
    }
    else
    {
        print("<p> Boa Noite</p>");
    }

?>   
</body>
</html>