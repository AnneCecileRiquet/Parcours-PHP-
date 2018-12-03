<?php

if (isset($_GET['langage']) AND isset($_GET['serveur'])) 
{
	echo  "Langage " . $_GET['langage'] . '<br/>' . ' Serveur ' . $_GET['serveur'] ;
}
else 
{
	echo 'Il faut renseigner un langage et un serveur !';
}   
//index.php?langage=PHP&serveur=LAMP

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