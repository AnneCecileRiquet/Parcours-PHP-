<?php

session_start();

$_SESSION['prenom'] = 'Jean';
$_SESSION['nom'] = 'Dupont';
$_SESSION['age'] = 24;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Titre de ma page</title>
    </head>
    <body>
    
    <p>
        <a href="info.php">Lien vers informations.php</a>
    </p>
    </body>
</html>