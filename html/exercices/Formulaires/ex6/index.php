<?php

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
<?php
   if (!empty($_POST['nom']) AND !empty($_POST['prenom'])) 
   {
       echo 'Bonjour '.$_POST['nom'].'  '.$_POST['prenom'];
   }else{

    echo    '<form action="index.php" method="POST">';
    echo    '<select name="civilité">';
    echo    '<option value="choix1">Mr</option>';
    echo    '<option value="choix2">Mme</option>';
    echo    '</select>';
    echo    '<p>Votre prénom : <input type="text" name="prenom" /></p>'; 
    echo    '<p>Votre nom : <input type="text" name="nom" /></p>';
    echo    '<input type="submit" value="ENVOYER" />';
    echo    '</form>';
    
};

?>
</body>
</html>
