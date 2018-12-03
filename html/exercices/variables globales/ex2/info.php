<?php
session_start();
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
echo "Ton prénom  est " . $_SESSION["prenom"] . ".<br>";
echo "Ton nom  est " . $_SESSION["nom"] . ".<br>";
echo "Tu as " . $_SESSION["age"] . "ans.";
?>






   
</body>
</html>