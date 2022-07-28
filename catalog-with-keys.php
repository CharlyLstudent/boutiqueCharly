<?php
$pull_champion = [
    "name" => "pull champion",
    "price" => 2500,
    "weight" => 100,
    "discount" => 10,
    "picture_url" => "/boutiqueCharly/assets/pull_champion.jpg",
];

$pull_adidas = [
    "name" => "pull adidas",
    "price" => 3500,
    "weight" => 100,
    "discount" => 10,
    "picture_url" => "/boutiqueCharly/assets/pull_adidas.jpg",
];

$pull_nike = [
    "name" => "pull nike",
    "price" => 3500,
    "weight" => 100,
    "discount" => 10,
    "picture_url" => "/boutiqueCharly/assets/pull_nike.jpg",
];
?>

<h3><?= $pull_adidas["name"] ?></h3>
<p> Prix: <?= "${pull_adidas["price"]}€" ?> Discount: <?= "${pull_adidas["discount"]}%" ?></p>
<p> Poid: <?= "${pull_adidas["weight"]}Gr" ?></p>
<img src='<?= $pull_adidas["picture_url"]?>' alt='image du pull champion'>
<p>Pull de marque champion en coton</p>

<h3><?= $pull_champion["name"] ?></h3>
<p> Prix: <?= "${pull_champion["price"]}€" ?> Discount: <?= "${pull_champion["discount"]}%" ?></p>
<p> Poid: <?= "${pull_champion["weight"]}Gr" ?></p>
<img src='<?= $pull_champion["picture_url"]?>' alt='image du pull champion'>
<p>Pull de marque champion en coton</p>

<h3><?= $pull_nike["name"] ?></h3>
<p> Prix: <?= "${pull_nike["price"]}€" ?> Discount: <?= "${pull_nike["discount"]}%" ?></p>
<p> Poid: <?= "${pull_nike["weight"]}Gr" ?></p>
<img src='<?= $pull_nike["picture_url"]?>' alt='image du pull champion'>
<p>Pull de marque champion en coton</p>