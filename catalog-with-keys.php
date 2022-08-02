<?php
require_once 'my-functions.php';
?>

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
<div class="products">
    <div class="abricot">
        <table>
            <tr>
                <td class="cells"><img src='<?= $pull_adidas["picture_url"] ?>' alt='image du pull champion'></td>
            </tr>
            <tr>
                <td class="cells"><h3><?= $pull_adidas["name"] ?></h3>
                    <p> Prix: <?= formatPrice(priceExcludingVAT($pull_adidas["price"])) ?> Discount: <?= "${pull_adidas["discount"]}%" ?></p>
                    <p> Poid: <?= "${pull_adidas["weight"]}Gr" ?></p>
                    <p>Pull de marque Adidas en coton</p></td>
            </tr>
        </table>
    </div>

    <div class="abricot">
        <table>
            <tr>
                <td class="cells"><img src='<?= $pull_champion["picture_url"] ?>' alt='image du pull champion'></td>
            </tr>
            <tr>
                <td class="cells"><h3><?= $pull_champion["name"] ?></h3>
                    <p> Prix: <?= formatPrice(priceExcludingVAT($pull_champion["price"])) ?> Discount: <?= "${pull_champion["discount"]}%" ?></p>
                    <p> Poid: <?= "${pull_champion["weight"]}Gr" ?></p>
                    <p>Pull de marque Champion en coton</p></td>
            </tr>
        </table>
    </div>

    <div class="abricot">
        <table>
            <tr>
                <td class="cells"><img src='<?= $pull_nike["picture_url"] ?>' alt='image du pull champion'></td>
            </tr>
            <tr>
                <td class="cells"><h3><?= $pull_nike["name"] ?></h3>
                    <p> Prix: <?= formatPrice(priceExcludingVAT($pull_nike["price"])) ?> Discount: <?= "${pull_nike["discount"]}%" ?></p>

                    <p> Poid: <?= "${pull_nike["weight"]}Gr" ?></p>
                    <p>Pull de marque Nike en coton</p></td>
            </tr>
        </table>
    </div>

</div>













