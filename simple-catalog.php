

<?php
$products = ["pull champion","pull nike","pull adidas"];

// first element
////////////////////////////////////
//$first_element= reset($products);
$first_element= $products[0];
echo "The first element of my array is $first_element";
echo "<br>";
// last element
////////////////////////////////////
//$last_element= end($products);
$array_lenght = count($products);
$last_element = $products[$array_lenght-1];
echo "The last element of my array is $last_element";
echo "<br>";

// ordered alphabetically elements //
////////////////////////////////////
sort($products);

$sorted = count($products);
for($i = 0; $i < $sorted; $i++) {
//    echo "$products[$i]";
//    echo "<br>";
    print_r("$products[$i] ");
}
//////////////////////////////////////
?>
