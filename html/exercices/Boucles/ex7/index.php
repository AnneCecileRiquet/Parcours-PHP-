<?php
$maVariable = (integer) 1;
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
while ($maVariable <=100){
echo "On tient le bon bout n°  ".($maVariable)."  <br/>";
$maVariable+=15;
}
?>  </p>    
</body>
</html>