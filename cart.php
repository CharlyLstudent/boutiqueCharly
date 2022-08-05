<?php
require 'libraryArray.php';
global $products;
global $transporter;
require_once 'my-functions.php';


$key = $_POST["result"];
$quantity = $_POST["quantity"];
$shippingPrice = "";
$transporterName = "";
checkQuantity($quantity);
keyInArray($key, $products);


?>


<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
<body>
<div class="details">
    <div class="card" style="width: 18rem;">
        <div class="card-header d-flex justify-content-center font-weight-bold">
            <h5>Détails de votre commande</h5>
        </div>
        <ul class="list-group list-group-flush">
            <img src="<?php echo $products[$key]["picture_url"] ?>" alt="#">
            <li class="list-group-item"><?php formatPrice($products[$key]["price"]) ?> Prix unitaire</li>
            <li class="list-group-item">Quantité <?php echo $quantity ?></li>
            <li class="list-group-item"><?php formatPrice(priceExcludingVAT($products[$key]["price"]) * $quantity) ?>
                Prix HT
            </li>
            <li class="list-group-item"><?php formatPrice($products[$key]["price"] * $quantity) ?> Prix TTC</li>
            <li class="list-group-item"> Prix après
                Réduction <?php formatPrice(discountedPrice($products[$key]["discount"], $products[$key]["price"]) * $quantity) ?></li>
            <li class="list-group-item">
                <form action="cart.php" method="post">
                    <label for="quantity">Quantité: </label>
                    <input type="number" name="quantity" min="1" max="5">
                    <input type="hidden" name="result" value="<?= $key ?>">
                    <input type="submit" value="commander">
                </form>
            </li>
        </ul>
    </div>
<!--    --><?php //foreach ($transporter as $keys => $transport) { ?>
<!--        --><?php //$shippingPrice = $transport["small package"]["price"]; ?>
<!--        --><?php //$transporterName = $transport["name"]; ?>
<!--    --><?php //} ?>

    <div class="card" style="width: 18rem;">
        <div class="card-header d-flex justify-content-center font-weight-bold">
            <h3>Détail de paiement</h3>
        </div>
        <div class="card-body">


<!--            --><?php //if (!$_POST['delivery']["0"]) { ?>
<!---->
<!--            --><?php //} ?>
<!---->
<!--            --><?php //if ($_POST['delivery'] === "laPoste") { ?>
<!--                <p>Transporteur: --><?php //echo $transporter['laPoste']['name'] ?><!--</p>-->
<!--            --><?php //} ?>
<!---->
<!--            --><?php //if ($_POST['delivery'] === "dhl") { ?>
<!--                <p>Transporteur: --><?php //echo $transporter['dhl']['name'] ?><!--</p>-->
<!--            --><?php //} ?>

            <form action="cart.php" method="post">
                <select name="delivery" id="delivery">
                    <option value="0">Sélectionnez</option>
                    <option value="laPoste">La Poste</option>
                    <option value="dhl">DHL</option>
                </select>
                <input type="hidden" name="result" value="<?= $key ?>">
                <input type="hidden" name="quantity" value="<?= $quantity ?>">
                <input type="submit" value="commander">
            </form>
        </div>
    </div>


</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
        crossorigin="anonymous"></script>
</body>
</html>