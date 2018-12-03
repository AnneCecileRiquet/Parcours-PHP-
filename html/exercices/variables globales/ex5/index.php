<?php 
setcookie('nom', $_POST['nom'], time() + 365*24*3600);
setcookie('prenom', $_POST['prenom'], time() + 365*24*3600);
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

<form action="index.php" method="POST">

 <p>Votre prénom : <input type="text" name="prenom" /></p>
 <p>Votre nom : <input type="nom" name="nom" /></p>
 <p><input type="submit" value="VALIDER"></p>
 <a href="cookies.php">Lien vers cookies.php</a>
</form>





   
</body>
</html>