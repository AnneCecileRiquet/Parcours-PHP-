<?php
$form = '<form action="index.php" method="POST">';
$form .= '<select name="civilité">';
$form .= '<option value="choix1">Mr</option>';
$form .= '<option value="choix2">Mme</option>';
$form .= '<option value="choix2">Mme</option>';
$form .= '</select>';
$form .= '<p>Votre prénom : <input type="text" name="prenom" required/></p>'; 
$form .= '<p>Votre nom : <input type="text" name="nom" required/></p>';

$form .= 'Selectionnez une fichier à upload : 
        <input type="file" name="file" id="fileToUpload">';
$form .= '<input type="submit" value="ENVOYER" />';        
$form .= '</form>';
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
if (isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST["file"]))
    {
    echo 'Bonjour '.$_POST['nom'].'  '.$_POST['prenom'] .'  '.$_POST["file"];
    }else{
    echo $form;  
};
?>   
</body>
</html>