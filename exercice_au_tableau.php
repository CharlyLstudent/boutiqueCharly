<?php
$promos = [

    "Data 8" =>[
        "number_of_student" => 20,
        "diplomation" => "Bac +8",
    ],

    "Starting Dev" =>[
        "number_of_student" => 14,
        "diplomation" => "Bac +2",
    ],

    "DevOps" =>[
        "number_of_student" => 16,
        "diplomation" => "Bac +2",
    ]

];

foreach ($promos as $promo => $value){
    echo "La promo: $promo ";
    echo "a ". $value["number_of_student"] . " apprenants ";
    echo "La formation est diplomante niveau " . $value["diplomation"] . "<br>" ;
}