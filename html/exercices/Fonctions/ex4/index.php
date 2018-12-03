<?php
function test($a = 12, $b = 15){
    if ($a > $b)
{
    echo("Le premier nombre est plus grand");
}
elseif ($a < $b)
{
    echo("Le premier nombre est plus petit");
}
else
{
    echo("Les deux nombres sont identiques");
}
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