<?php
$depart = array (
    "01"=>'Ain',
    "03"=>'Allier',
    "07"=>'Ardèche',
    "15"=>'Cantal',
    "26"=>'Drôme ',
    "38"=>'Isère',
    "42"=>'Loire',
    "43"=>'Haute-Loire',
    "63"=>'Puy-de-Dôme',
    "69"=>'Rhône',
    "73"=>'Savoie',
    "74"=>'Haute-Savoie');

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
<p><?php


echo '<br/>'.$depart ["69"]. '<br/>';
$depart["57"]="Metz";
foreach($depart as $element => $key)
{
    echo "Le département {$key}" . " a le numéro " . "{$element}" . '<br/>';
} 



?>  </p>    
</body>
</html>