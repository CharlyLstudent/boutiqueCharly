<?php
require_once 'my-functions.php';
global $products;
require 'arrayProduct.php';
?>
<div class="principal d-flex flex-wrap justify-content-between col-md-9 gap-5">
    <?php foreach ($products as $key => $product) { ?>
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $product["picture_url"] ?>" alt="Card image">
            <div class="card-body">
                <h3> <?php echo $product["name"] ?></h3>
                <p class="card-text"><?php  formatPrice(priceExcludingVAT($product["price"])); ?> Prix HT</p>
                <p class="card-text"><?php  formatPrice($product["price"]) ?> Prix TTC </p>
                <p class="card-text">Reduction <?php echo $product["discount"] ?>
                    % <?php  formatPrice(discountedPrice($product["discount"], $product["price"])); ?>
                    Prix après réduction</p>
                <p><?php echo $product["weight"] ?>Gr</p>
                <form action="cart.php" method="post">
                    <label for="quantity">Quantité: </label>
                    <input type="number" name="quantity" min="1" max="5">
                    <input type="hidden" name="result" value="<?= $key ?>" >
                    <input type="submit" value="commander">
                </form>
            </div>
        </div>
    <?php } ?>
</div>


<!--<div class="principal d-flex flex-wrap justify-content-between col-md-9 gap-5">-->
<!--    --><?php //foreach ($products as $product) { ?>
<!--        <div class="card" style="width: 18rem;">-->
<!--            <img class="card-img-top" src="--><?php //echo $product["picture_url"] ?><!--" alt="Card image">-->
<!--            <div class="card-body">-->
<!--                <h3> --><?php //echo $product["name"] ?><!--</h3>-->
<!--                <p class="card-text">--><?php //echo formatPrice(priceExcludingVAT($product["price"])); ?><!-- Prix HT</p>-->
<!--                <p class="card-text">--><?php //echo formatPrice($product["price"]) ?><!-- Prix TTC </p>-->
<!--                <p class="card-text">Reduction --><?php //echo $product["discount"] ?>
<!--                    % --><?php //echo formatPrice(discountedPrice($product["discount"], $product["price"])); ?>
<!--                    Prix après réduction</p>-->
<!--                <p>--><?php //echo $product["weight"] ?><!--Gr</p>-->
<!--                <form action="cart.php" method="post">-->
<!--                    <label for="quantity">Quantité: </label>-->
<!--                    <input type="number" name="quantity" min="1" max="5">-->
<!--                    <input type="submit" value="commander">-->
<!--                    <input type="hidden" name="">-->
<!--                </form>-->
<!--            </div>-->
<!--        </div>-->
<!--    --><?php //} ?>
<!--</div>-->


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

