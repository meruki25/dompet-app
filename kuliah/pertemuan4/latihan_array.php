<?php
$minuman = array("Kopi", "Teh", "Jus Jeruk");
$makanan = ["Nasi Goreng", "Soto", "Bubur"];

// Add Minuman
array_push($minuman, "air putih");
$minuman[1] = "Teh Manis";
// var_dump($minuman);
// echo($minuman[1]);
// var_dump($makanan[0]);

$menu = [
    'makanan' => [
        "Nasi Goreng", "Soto", "Bubur"
    ],
    'minuman' => [
        "Kopi", "Teh", "Jus Jeruk"
    ]
];
print(json_encode($menu));
