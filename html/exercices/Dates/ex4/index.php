



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
        $timeDay = strtotime('today'); 
        $timestamp = mktime(15, 00, 00, 8, 2, 2016); 

        echo "Timestamp d'aujourd'hui : " . $timeDay . "<br />Timestamp du 2 Août 2016 à 15h : " . $timestamp;
    ?>



</body>
</html>