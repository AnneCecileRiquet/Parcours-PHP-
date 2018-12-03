<?php
$mois = array (
    1=>'janvier',
    2=>'février',
    3=>'mars',
    4=>'avril',
    5=>'mai',
    6=>'juin',
    7=>'juillet',
    8=>'aout',
    9=>'septembre',
    10=>'octobre',
    11=>'novembre',
    12=>'décembre');

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
foreach($mois as $element)
{
    echo $element . '<br/>';
} 
?>  </p>    
</body>
</html>