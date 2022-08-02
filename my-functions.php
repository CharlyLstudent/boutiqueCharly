<?php
declare(strict_types=1);
// affichage du prix en euro avec virgule pour les centimes
function  formatPrice(float $price): void
{
    $price= $price/100; // => diviser le prix par 100 pour obtenir les euros et centimes
    echo number_format($price, 2) . "€"; // => number_format qui vas permettre de selectionner mon prix et le nombre de decimales
}
//formatPrice(1500);

function priceExcludingVAT($ttcPrice): float
{
    $vat = 15;
    return (100*$ttcPrice)/(100 + $vat);

}

function discountedPrice($discount, $price): float
{
    return $price - ($price * $discount / 100);

}

//////////////////////////////////////////////////////////////////////////
// Formule de calcul prix HT                                            //
// HT = (100 x TTC) / (100 + TVA)                                       //
//////////////////////////////////////////////////////////////////////////
// Formule de calcul discount                                           //
//discounted_price = original_price - (original_price * discount / 100) //
//////////////////////////////////////////////////////////////////////////
