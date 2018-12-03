<?php
$age = (string) 21;
$genre = (string) "femme";
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
if ($genre == "homme" AND $age >= 18)
{
    echo "Vous êtes un homme et vous êtes majeur";
}
elseif ($genre == " homme" AND $age <= 18)
{
    echo "Vous êtes un homme et vous êtes mineur";
}
elseif ($genre == "femme" AND $age <= 18)
{
    echo "Vous êtes une femme et vous êtes mineure";
}
elseif ($genre == "femme" AND $age >= 18)
{
    echo "Vous êtes une femme et vous êtes majeure";
}

?>  </p>    
</body>
</html>