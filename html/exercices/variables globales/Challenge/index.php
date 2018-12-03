<?php

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <link href="menu.css" type="text/css" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
$string = "PHP est un outil puissant, il est utilisé pour le développement des sites";
$words = explode(' ', $string);

$longestWordLength = 0;
$longestWord = '';

foreach ($words as $word) {
if (strlen($word) > $longestWordLength) {
$longestWordLength = strlen($word);
$longestWord = $word;
}
}

echo $longestWord;

?>
   
</body>
</html>