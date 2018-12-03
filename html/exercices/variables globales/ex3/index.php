<?php 
$cookie_login = "";
$cookie_password = "";

setcookie($cookie_login, $cookie_password, time() + 365*24*3600); 
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

<form action="cookies.php" method="POST">

 <p>Votre login : <input type="text" name="login" /></p>
 <p>Votre mot de passe : <input type="password" name="password" /></p>
 <p><input type="submit" value="VALIDER"></p>
</form>





   
</body>
</html>