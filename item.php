
<?php
$name = "pull champion";
$price = "25€";
$picture = "/boutiqueCharly/assets/pull_champion.jpg";

?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <h1> <?= $name ?> </h1>
        <h2> <?= $price ?> </h2>
        <img  src="<?= $picture?>"  alt="photo d'un pull de marque champion">
        <p>Pull de marque champion en coton</p>

    </body>
</html>