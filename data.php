<?php
include __DIR__ .  '/classes/Products.php';
include __DIR__ . '/classes/Toy.php';
include __DIR__ . '/classes/Food.php';

$products = [
    new Toy('image/Blasting_Palla_Corda.jpg', 'Blasting_Palla_Corda', '19.99', 'Toys', ' 3 years', 'Rubber (TPR)'),
    new Toy('image/j_top_seller_1000x1000_8.jpg', 'j_top_seller', '24.99', 'Toys', ' 2 years', 'Rubber - Plastic'),
    new Toy('image/MAG_GIOCO-CANE-4_png.png', 'MAG_GIOCO', '12.99', 'Toys', ' 5 years', 'Rubber'),
    new Food('image/635813-cesar-.jpg', 'Cesar', '12.90', 'Food', '31-10-2024', '24 x 100g'),
    new Food('image/nutrimi-all-breeds-cibo-per-cane-adulto-400-gr-maiale.jpg', 'Nutrimi-all-breeds', '6.90', 'Food', '31-10-2024', '500g'),
    new Food('image/royal_canin_mini_adult.jpg', 'Royal_canin_adult', '15.99', 'Food', '31-10-2024', '2kg')
];


// $toys[] = $toy1;
// $toy1 = new Toy('Nome del giocattolo 1', 'Prezzo del giocattolo 1', 'URL immagine giocattolo 1', 'Descrizione giocattolo 1');
// $toy1->setMaterial('Materiale giocattolo 1');
// $toy1->setAge('Età consigliata giocattolo 1');
