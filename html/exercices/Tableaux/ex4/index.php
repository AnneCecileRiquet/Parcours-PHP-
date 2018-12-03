<?php
$liste = array (
    "Alex",
    "Max",
    "Dominique",
    "Claude",
    "Leslie",
    "Carlie",
    "Lou");

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


foreach($liste as $element)
{
    echo "Salut "."{$element}" . " , devine quoi ! Je me marie dans samedi dans deux semaines ! J'espère te compter parmi les invités ! Gros bisous :)" . '<br/>';
} 



?>  </p>    
</body>
</html>