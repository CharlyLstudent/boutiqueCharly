
<?php
$products = [
    "brochettes" => [
        "name" => "Brochettes",
        "price" => 1000,
        "weight" => 400,
        "discount" => 15,
        "picture_url" => "/boutiqueCharly/assets/brochettes.jpg",
    ],
    "burger" => [
        "name" => "Burger",
        "price" => 1000,
        "weight" => 350,
        "discount" => 20,
        "picture_url" => "/boutiqueCharly/assets/burger.jpg",
    ],
    "pokebowl" => [
        "name" => "Pokebowl",
        "price" => 1500,
        "weight" => 100,
        "discount" => 5,
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
        "discount" => 30,
        "picture_url" => "/boutiqueCharly/assets/asperge.jpg",
    ],
    "poisson" => [
        "name" => "Poisson",
        "price" => 2500,
        "weight" => 100,
        "discount" => 10,
        "picture_url" => "/boutiqueCharly/assets/poissonTwo.jpg",
    ],
    "raviole" => [
        "name" => "Raviole",
        "price" => 2500,
        "weight" => 100,
        "discount" => 25,
        "picture_url" => "/boutiqueCharly/assets/raviole.jpg",
    ],
    "ribs" => [
        "name" => "Ribs",
        "price" => 2500,
        "weight" => 100,
        "discount" => 8,
        "picture_url" => "/boutiqueCharly/assets/ribs.jpg",
    ],


];


$transporter = [
    "laPoste" => [
        "name" => "La Poste",
        "small package" =>[
            "poids min" => 0,
            "poids max" => 500,
            "price" => 500,
                               ],
        "medium package" => [
            "poids min" => 500,
            "poids max" => 1999,
            "price" => 10,
        ],
        "big package" => [
            "poids max" => 2000,
            "price" => null,
        ],
    ],
    "dhl" => [
        "name" => "DHL",
        "small package" =>[
            "poids min" => 0,
            "poids max" => 500,
            "price" => 1000,
        ],
        "medium package" => [
            "poids min" => 500,
            "poids max" => 1999,
            "price" => 10,
        ],
        "big package" => [
            "poids max" => 2000,
            "price" => null,
        ],
    ],

];

?>


