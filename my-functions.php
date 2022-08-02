<?php
declare(strict_types=1);

function  formatPrice(int $price): void
{
    $price= $price/100;
    echo number_format($price, 2) . "€";
}
formatPrice(1500);
