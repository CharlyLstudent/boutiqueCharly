<?php
require 'arrayProduct.php';
global $products;
require_once 'my-functions.php'
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

<?php
$key = $_POST["result"];
$quantity = $_POST["quantity"];
?>
<?php
//if(!filter_has_var(INPUT_POST, "quantity")){
//    header("Location: http://localhost/boutiqueCharly/error.php");
//    exit;
//}else{
//?>
<div class="details">
    <div class="card" style="width: 18rem;">
        <div class="card-header d-flex justify-content-center font-weight-bold">
            <p>Détails de votre commande</p>

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
        </ul>
    </div>
</div>
<?php } ?>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK"
        crossorigin="anonymous"></script>
</body>
</html>