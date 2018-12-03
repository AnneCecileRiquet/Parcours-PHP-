



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
	setlocale(LC_ALL, 'fr_FR');
	echo 'Il y a ' . date('t', mktime(0,0,0,2,1,2017)) . ' jours dans le mois de ' . strftime('%B %Y', mktime(0,0,0,2,1,2017)) . '.';
    ?>


</body>
</html>