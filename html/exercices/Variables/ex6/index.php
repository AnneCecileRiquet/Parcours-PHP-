<?php
$prix = (integer) 785;
$ristourne = (integer) (785/100*30);
$solde = (integer) $prix-$solde;
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
echo " Le prix est de " .$prix.'<br/>'."La ristourne est de ".$ristourne.'<br/>'. "Le t-shirt soldé est de ".$solde;

?>  </p>    
</body>
</html>