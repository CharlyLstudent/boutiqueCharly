<?php
require 'my-functions.php';
?>


<?php
$products = [
    "brochettes" => [
        "name" => "Brochettes",
        "price" => 1000,
        "weight" => 400,
        "discount" => 10,
        "picture_url" => "/boutiqueCharly/assets/brochettes.jpg",
    ],
    "burger" => [
        "name" => "Burger",
        "price" => 1000,
        "weight" => 350,
        "discount" => 10,
        "picture_url" => "/boutiqueCharly/assets/burger.jpg",
    ],
    "pokebowl" => [
        "name" => "Pokebowl",
        "price" => 1500,
        "weight" => 100,
        "discount" => 10,
        "picture_url" => "/boutiqueCharly/assets/pokebowl.jpg",
    ],
    "br" => [
        "name" => "Brochettes",
        "price" => 1000,
        "weight" => 400,
        "discount" => 10,
        "picture_url" => "/boutiqueCharly/assets/brochettes.jpg",
    ],
    "bu" => [
        "name" => "Burger",
        "price" => 1000,
        "weight" => 350,
        "discount" => 10,
        "picture_url" => "/boutiqueCharly/assets/burger.jpg",
    ],
    "po" => [
        "name" => "Pokebowl",
        "price" => 1500,
        "weight" => 100,
        "discount" => 10,
        "picture_url" => "/boutiqueCharly/assets/pokebowl.jpg",
    ],

];
?>

<div class="products">

    <?php foreach ($products as $product) { ?>
        <table>
            <div class="abricots">
                <tr>
                    <td class="cells"><img src="<?php echo $product["picture_url"] ?>" alt="menfou"></td>
                </tr>


                <tr>
                    <td>
                        <h3> <?php echo $product["name"] ?></h3>
                        <p><?php echo formatPrice($product["price"]) ?> <?php echo $product["discount"] ?>%</p>
                        <p><?php echo $product["weight"] ?>Gr</p>
                    </td>
                </tr>
            </div>

        </table>
    <?php } ?>
</div>
<?php
?>
<!---->
<!--<div class="products">-->
<!--    <div class="abricot">-->
<!--        <table>-->
<!--            <tr>-->
<!--                <td class="cells"><img src='--><? //= $products["brochettes"]["picture_url"] ?><!--'-->
<!--                                       alt='image du plat de brochettes'></td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td class="cells">-->
<!--                    <h3> --><? //= $products["brochettes"]["name"] ?><!--</h3>-->
<!--                    <p> Prix: --><? //= $products["brochettes"]["price"] . "€" ?>
<!--                        Discount: --><? //= $products["brochettes"]["discount"] . "%" ?><!--</p>-->
<!--                    <p>Délicieux plat de brochettes marinées</p>-->
<!--                </td>-->
<!--            </tr>-->
<!--        </table>-->
<!--    </div>-->
<!---->
<!---->
<!--    <div class="abricot">-->
<!--        <table>-->
<!--            <tr>-->
<!--                <td class="cells"><img src='--><? //= $products["burger"]["picture_url"] ?><!--' alt='image du plat burger'></td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td class="cells">-->
<!--                    <h3>--><? //= $products["burger"]["name"] ?><!--</h3>-->
<!--                    <p> Prix: --><? //= $products["burger"]["price"] . "€" ?>
<!--                        Discount: --><? //= $products["burger"]["discount"] . "%" ?><!--</p>-->
<!--                    <p>Un burger qui fera plaisir aux plus gourmands</p>-->
<!--                </td>-->
<!--            </tr>-->
<!--        </table>-->
<!--    </div>-->
<!---->
<!---->
<!--    <div class="abricot">-->
<!--        <table>-->
<!--            <tr>-->
<!--                <td class="cells"><img src='--><? //= $products["pokebowl"]["picture_url"] ?><!--' alt='image du plat pokebowl'>-->
<!--                </td>-->
<!--            </tr>-->
<!--            <tr>-->
<!--                <td class="cells">-->
<!--                    <h3>--><? //= $products["pokebowl"]["name"] ?><!--</h3>-->
<!--                    <p> Prix: --><? //= $products["pokebowl"]["price"] . "€" ?>
<!--                        Discount: --><? //= $products["pokebowl"]["discount"] . "%" ?><!--</p>-->
<!--                    <p>Un pokebowl aussi bon que coloré!</p>-->
<!--                </td>-->
<!--            </tr>-->
<!--        </table>-->
<!--    </div>-->
<!--</div>-->
