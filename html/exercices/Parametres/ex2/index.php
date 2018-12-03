<?php

if (isset($_GET['prenom']) AND isset($_GET['nom']) AND isset($_GET['age'])) 
{
	echo  "Prénom : " . $_GET['prenom'] . '<br/>'.' Nom : ' . $_GET['nom'] . '<br/>'. "Age : "  . $_GET['age'];
}
else 
{
	echo 'Il faut renseigner un age !';
}   
//index.php?nom=Nemare&prenom=Jean&age=35
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