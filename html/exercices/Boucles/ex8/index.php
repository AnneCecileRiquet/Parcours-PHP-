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
while ($maVariable <=200){
echo "Enfin!!! n°  ".($maVariable)."  <br/>";
$maVariable+=12;
}
?>  </p>    
</body>
</html>