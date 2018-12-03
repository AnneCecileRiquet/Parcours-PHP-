<?php

if (isset($_GET['dateDebut']) AND isset($_GET['dateFin'])) 
{
	echo  "Date de début " . $_GET['dateDebut'] . '<br/>' . ' Date de fin ' . $_GET['dateFin'] ;
}
else 
{
	echo 'Il faut renseigner une date début et de fin !';
}   
//index.php?dateDebut=2/05/2016&dateFin=27/11/2016
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