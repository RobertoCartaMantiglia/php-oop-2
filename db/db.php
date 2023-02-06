<?php
include_once __DIR__ . '/../models/Accessory.php';
include_once __DIR__ . '/../models/Toy.php';
include_once __DIR__ . '/../models/Food.php';
include_once __DIR__ . '/../models/Product.php';

$toyList = [];
$foodList = [];
$accessoryList = [];

$Cuccia = new Accessory(new Category("Cat"), "Arca", "Cuccia per gatto morbida", "Memory-foam", "Accessorio", "50,00 €", 'https://m.media-amazon.com/images/I/51ARMnCOFmL._SL500_.jpg', "color: grey", "peluche", "taglia: S");
$Croccantino = new Food(new Category("Dog"), "Monge", "Croccantini monge tacchino", "Buoni!", "Cibo", "3,50 €", 'https://d2j6dbq0eux0bg.cloudfront.net/images/22926746/1298281439.jpg', "12/11/2025", "300 gr");
$OssoFinto = new Toy(new Category("Dog"), "Kong", "Osso di gomma Kong", "Il vostro cane lo adorerà!", "Giocattolo", "35,50 €", 'https://cdn.shopify.com/s/files/1/1019/8339/products/image_fe8d0d9d-aa13-42bc-9927-11aec84bd618_1024x1024.jpg?v=1635634447', "Multicolor", "materiale: gomma", "taglia M");

array_push($toyList, $OssoFinto);
array_push($foodList, $Croccantino);
array_push($accessoryList, $Cuccia);
