<?php
$products = [
    "brochettes" => [
        "name" => "Brochettes",
        "price" => 10,
        "weight" => 100,
        "discount" => 10,
        "picture_url" => "/boutiqueCharly/assets/brochettes.jpg",
    ],
    "burger" => [
        "name" => "Burger",
        "price" => 10,
        "weight" => 100,
        "discount" => 10,
        "picture_url" => "/boutiqueCharly/assets/burger.jpg",
    ],
    "pokebowl" => [
        "name" => "Pokebowl",
        "price" => 15,
        "weight" => 100,
        "discount" => 10,
        "picture_url" => "/boutiqueCharly/assets/pokebowl.jpg",
    ]
];
?>

<div class="products">
    <div class="abricot">
        <table>
            <tr>
                <td class="cells"><img src='<?= $products["brochettes"]["picture_url"] ?>'
                                       alt='image du plat de brochettes'></td>
            </tr>
            <tr>
                <td class="cells">
                    <h3><?= $products["brochettes"]["name"] ?></h3>
                    <p> Prix: <?= $products["brochettes"]["price"] . "€" ?> Discount: <?= $products["brochettes"]["discount"] . "%" ?></p>
                    <p>Délicieux plat de brochettes marinées</p>
                </td>
            </tr>
        </table>
    </div>


    <div class="abricot">
        <table>
            <tr>
                <td class="cells"><img src='<?= $products["burger"]["picture_url"] ?>' alt='image du plat burger'></td>
            </tr>
            <tr>
                <td class="cells">
                    <h3><?= $products["burger"]["name"] ?></h3>
                    <p> Prix: <?= $products["burger"]["price"] . "€" ?> Discount: <?= $products["burger"]["discount"] . "%" ?></p>
                    <p>Un burger qui fera plaisir aux plus gourmands</p>
                </td>
            </tr>
        </table>
    </div>


    <div class="abricot">
        <table>
            <tr>
                <td class="cells"><img src='<?= $products["pokebowl"]["picture_url"] ?>' alt='image du plat pokebowl'>
                </td>
            </tr>
            <tr>
                <td class="cells">
                    <h3><?= $products["pokebowl"]["name"] ?></h3>
                    <p> Prix: <?= $products["pokebowl"]["price"] . "€" ?> Discount: <?= $products["pokebowl"]["discount"] . "%" ?></p>
                    <p>Un pokebowl aussi bon que coloré!</p>
                </td>
            </tr>
        </table>
    </div>
</div>
