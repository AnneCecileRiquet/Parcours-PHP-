



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
		$today = strtotime('today');
		$date = mktime(00, 00, 00, 5, 16, 2016);
		$ecart = ($today-$date)/86400; //24h == 86400 secondes

        echo "Il y a un écart de " . $ecart .  " jours entre aujourd'hui et le 16 mai 2016.";
    ?>

</body>
</html>