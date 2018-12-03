<?php
function test($prenom = "Blabla", $nom = "Car", $age = "25"){
    return "Bonjour ".$prenom." ".$nom.", tu as ".$age." ans" ;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p><?php

echo test();
?>  </p>    
</body>
</html>