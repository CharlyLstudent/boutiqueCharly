<?php
declare(strict_types=1);
// affichage du prix en euro avec virgule pour les centimes
function  formatPrice(int $price): void
{
    $price= $price/100; // => diviser le prix par 100 pour obtenir les euros et centimes
    echo number_format($price, 2) . "€"; // => number_format qui vas permettre de selectionner mon prix et le nombre de decimales
}
//formatPrice(1500);

