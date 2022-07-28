<?php
$products = ["iPhone","iPad","iMac"];

// first element
////////////////////////////////////
$first_element= reset($products);
echo "The first element of my array is $first_element";
echo "<br>";
// last element
////////////////////////////////////
$last_element= end($products);
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
