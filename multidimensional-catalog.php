<?php
require_once 'my-functions.php';
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
    "pizza" => [
        "name" => "Pizza",
        "price" => 1000,
        "weight" => 350,
        "discount" => 10,
        "picture_url" => "/boutiqueCharly/assets/pizza.jpg",
    ],
    "asperge" => [
        "name" => "Asperge",
        "price" => 3000,
        "weight" => 350,
        "discount" => 10,
        "picture_url" => "/boutiqueCharly/assets/asperge.jpg",
    ],
    "poisson" => [
        "name" => "Poisson",
        "price" => 2500,
        "weight" => 100,
        "discount" => 10,
        "picture_url" => "/boutiqueCharly/assets/poisson.jpg",
    ],
    "raviole" => [
        "name" => "Raviole",
        "price" => 2500,
        "weight" => 100,
        "discount" => 10,
        "picture_url" => "/boutiqueCharly/assets/raviole.jpg",
    ],
    "ribs" => [
        "name" => "Ribs",
        "price" => 2500,
        "weight" => 100,
        "discount" => 10,
        "picture_url" => "/boutiqueCharly/assets/ribs.jpg",
    ],



];
?>

<div class="d-flex flex-wrap justify-content-between col-md-9 gap-5">
    <?php foreach ($products as $product) { ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $product["picture_url"] ?>" alt="Card image">
            <div class="card-body">
                <h3> <?php echo $product["name"] ?></h3>
                <p class="card-text"><?php echo formatPrice(priceExcludingVAT($product["price"])); ?> Prix HT</p>
                <p class="card-text"><?php echo formatPrice($product["price"]) ?> Prix TTC </p>
                <p class="card-text">Reduction <?php echo $product["discount"] ?>
                    % <?php echo formatPrice(discountedPrice($product["discount"], $product["price"])); ?>
                    Prix après réduction</p>
                <p><?php echo $product["weight"] ?>Gr</p>
            </div>
        </div>
    <?php } ?>
</div>


<!--    <div class="products">-->
<!---->
<!--        --><?php //foreach ($products as $product) { ?>
<!--            <table>-->
<!--                <div class="abricots">-->
<!--                    <tr>-->
<!--                        <td class="cells"><img src="--><?php //echo $product["picture_url"] ?><!--" alt="menfou"></td>-->
<!--                    </tr>-->
<!---->
<!---->
<!--                    <tr>-->
<!--                        <td>-->
<!--                            <h3> --><?php //echo $product["name"] ?><!--</h3>-->
<!--                            <p class="HT">--><?php //echo formatPrice(priceExcludingVAT($product["price"])); ?><!-- Prix HT</p>-->
<!--                            <p class="TTC">--><?php //echo formatPrice($product["price"]) ?><!-- Prix TTC </p>-->
<!--                            <p class="discount">Reduction --><?php //echo $product["discount"] ?>
<!--                                % --><?php //echo formatPrice(discountedPrice($product["discount"], $product["price"])); ?>
<!--                                Prix après réduction</p>-->
<!--                            <p>--><?php //echo $product["weight"] ?><!--Gr</p>-->
<!--                        </td>-->
<!--                    </tr>-->
<!--                </div>-->
<!---->
<!--            </table>-->
<!--        --><?php //} ?>
<!--    </div>-->

