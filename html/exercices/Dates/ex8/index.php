



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
        echo "Il y a 22 jours, nous étions le : " . strftime('%A %#d %B', mktime(0,0,0,date('m'),date('d')-22,date('Y')));
    ?>

</body>
</html>