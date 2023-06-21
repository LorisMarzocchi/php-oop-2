<?php
include __DIR__ .  '/classes/Products.php';
include __DIR__ . '/classes/Toy.php';
include __DIR__ . '/classes/Food.php';


$products = [
    new Toy('image/Blasting_Palla_Corda.jpg', 'Blasting_Palla_Corda', 'dog', '19.99 €', 'Toys', ' 3 years', 'Rubber (TPR)'),
    new Toy('image/j_top_seller_1000x1000_8.jpg', 'j_top_seller', 'dog', '24.99 €', 'Toys', ' 2 years', 'Rubber - Plastic'),
    new Toy('image/MAG_GIOCO-CANE-4_png.png', 'MAG_GIOCO', 'dog', '12.99 €', 'Toys', ' 5 years', 'Rubber'),
    new Food('image/635813-cesar-.jpg', 'Cesar', 'dog', '12.90 €', 'Food', '31-10-2024', '24 x 100g'),
    new Food('image/nutrimi-all-breeds-cibo-per-cane-adulto-400-gr-maiale.jpg', 'Nutrimi-all-breeds', 'dog', '6.90 €', 'Food', '31-10-2024', '500g'),
    new Food('image/royal_canin_mini_adult.jpg', 'Royal_canin_adult', 'dog', '15.99 €', 'Food', '31-10-2024', '2kg'),

    new Toy('image/gimcat-gioco-per-gatti-interattivo-tornado.jpg', 'Gimcat', 'cat', '19.99 €', 'Toys', ' 1 years', 'Rubber (TPR)'),
    new Food('image/catfood_.jpg', 'NovaFoods Natural trainer', 'cat', '19.99 €', 'Food', '31-10-2024', '1.5kg'),
    new Food('image/54454_2.png', 'Gourmet Mon Petit', 'cat', '9.99 €', 'Food', '31-10-2024', '1kg'),


];


// $toys[] = $toy1;
// $toy1 = new Toy('Nome del giocattolo 1', 'Prezzo del giocattolo 1', 'URL immagine giocattolo 1', 'Descrizione giocattolo 1');
// $toy1->setMaterial('Materiale giocattolo 1');
// $toy1->setAge('Età consigliata giocattolo 1');
