<?php
function test($prenom = "Blabla", $num = 6){
    return $prenom. " " .$num;
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