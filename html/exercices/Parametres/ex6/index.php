<?php

if (isset($_GET['batiment']) AND isset($_GET['salle'])) 
{
	echo  "Allez au batiment " . $_GET['batiment'] . ' et à la salle ' . $_GET['salle'] ;
}
else 
{
	echo 'Il faut renseigner un batiment et un salle !';
}   
// index.php?batiment=12&salle=101

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
<p>
    
</p>    
</body>
</html>