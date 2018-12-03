<?php

if (isset($_GET['prenom']) AND isset($_GET['nom'])) 
{
	echo  "Prénom : " . $_GET['prenom'] . '<br/>'.' Nom : ' . $_GET['nom'] ;
}
else 
{
	echo 'Il faut renseigner un nom et un prénom !';
}   
//index.php?nom=Nemare&prenom=Jean
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