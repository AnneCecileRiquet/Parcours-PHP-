<?php
$age = (integer) 17;
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
if ($age>=18)
{
    echo "Vous êtes majeur";
}
else
{
    echo "Vous êtes mineur";
}


?>  </p>    
</body>
</html>