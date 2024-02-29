<?php

$products = [
  [
    'name' => 'Hamburger',
    'image' => 'img/products/hamburger.jpg',
    'ingredients' => 'Pane, carne, lattuga, pomodoro, formaggio',
    'description' => 'Delizioso hamburger con ingredienti freschi.',
    'type_id' => 5,
    'price' => 5.99,
    'visibility' => true,
    'restaurant_id' => 1
  ],
  [
    'name' => 'Cheeseburger',
    'image' => 'img/products/cheeseburger.jpg',
    'ingredients' => 'Pane, carne, formaggio, lattuga, pomodoro',
    'description' => 'Hamburger con formaggio aggiunto.',
    'type_id' => 5,
    'price' => 6.49,
    'visibility' => true,
    'restaurant_id' => 1
  ],
  [
    'name' => 'Big Mac',
    'image' => 'img/products/big_mac.jpg',
    'ingredients' => 'Pane, carne, formaggio, insalata, cipolla, salsa speciale',
    'description' => 'Il famoso hamburger di McDonalds.',
    'type_id' => 5,
    'price' => 7.99,
    'visibility' => true,
    'restaurant_id' => 1
  ],
  [
    'name' => 'Fries',
    'image' => 'img/products/fries.jpg',
    'ingredients' => 'Patate fritte',
    'description' => 'Patatine fritte croccanti e saporite.',
    'type_id' => 2,
    'price' => 2.99,
    'visibility' => true,
    'restaurant_id' => 1
  ],
  [
    'name' => 'Chicken Royale',
    'image' => 'img/products/chicken_royale.jpg',
    'ingredients' => 'Pane, pollo impanato, lattuga, maionese',
    'description' => 'Panino con pollo croccante.',
    'type_id' => 5,
    'price' => 6.99,
    'visibility' => true,
    'restaurant_id' => 2
  ],
  [
    'name' => 'Whopper',
    'image' => 'img/products/whopper.jpg',
    'ingredients' => 'Pane, carne, pomodoro, lattuga, cetriolini, maionese',
    'description' => 'Iconico hamburger di Burger King.',
    'type_id' => 5,
    'price' => 8.49,
    'visibility' => true,
    'restaurant_id' => 2
  ],
  [
    'name' => 'Fries',
    'image' => 'img/products/fries.jpg',
    'ingredients' => 'Patate fritte',
    'description' => 'Patatine fritte croccanti e saporite.',
    'type_id' => 2,
    'price' => 2.99,
    'visibility' => true,
    'restaurant_id' => 2
  ],
  [
    'name' => 'Bacon Cheeseburger',
    'image' => 'img/products/bacon_cheeseburger.jpg',
    'ingredients' => 'Pane, carne, formaggio, bacon, lattuga, pomodoro',
    'description' => 'Hamburger con formaggio e bacon.',
    'type_id' => 5,
    'price' => 7.99,
    'visibility' => true,
    'restaurant_id' => 3
  ],
  [
    'name' => 'Fries',
    'image' => 'img/products/fries.jpg',
    'ingredients' => 'Patate fritte',
    'description' => 'Patatine fritte croccanti e saporite.',
    'type_id' => 2,
    'price' => 3.49,
    'visibility' => true,
    'restaurant_id' => 3
  ],
  [
    'name' => 'Hot Dog',
    'image' => 'img/products/hot_dog.jpg',
    'ingredients' => 'Pane per hot dog, salsiccia, cipolla, ketchup, senape',
    'description' => 'Hot dog classico.',
    'type_id' => 5,
    'price' => 4.99,
    'visibility' => true,
    'restaurant_id' => 3
  ],
  [
    'name' => 'Pizza Margherita',
    'image' => 'img/products/pizza_margherita.jpg',
    'ingredients' => 'Impasto per pizza, salsa di pomodoro, mozzarella, basilico',
    'description' => 'Pizza classica con mozzarella e pomodoro.',
    'type_id' => 4,
    'price' => 9.99,
    'visibility' => true,
    'restaurant_id' => 4
  ],
  [
    'name' => 'Pizza Pepperoni',
    'image' => 'img/products/pizza_pepperoni.jpg',
    'ingredients' => 'Impasto per pizza, salsa di pomodoro, mozzarella, pepperoni',
    'description' => 'Pizza con pepperoni piccanti.',
    'type_id' => 4,
    'price' => 10.99,
    'visibility' => true,
    'restaurant_id' => 4
  ],
  [
    'name' => 'Pizza Vegetariana',
    'image' => 'img/products/pizza_vegetariana.jpg',
    'ingredients' => 'Impasto per pizza, salsa di pomodoro, mozzarella, verdure miste',
    'description' => 'Pizza con una selezione di verdure fresche.',
    'type_id' => 4,
    'price' => 11.99,
    'visibility' => true,
    'restaurant_id' => 4
  ],
  [
    'name' => 'Sushi Misto',
    'image' => 'img/products/sushi_misto.jpg',
    'ingredients' => 'Riso, pesce crudo assortito, alga nori',
    'description' => 'Assortimento di sushi fresco.',
    'type_id' => 2,
    'price' => 15.99,
    'visibility' => true,
    'restaurant_id' => 7
  ],
  [
    'name' => 'Tempura',
    'image' => 'img/products/tempura.jpg',
    'ingredients' => 'Verdure, gamberi, pastella',
    'description' => 'Frittura giapponese croccante.',
    'type_id' => 2,
    'price' => 12.99,
    'visibility' => true,
    'restaurant_id' => 12
  ],
  [
    'name' => 'Taco di pollo',
    'image' => 'img/products/taco_pollo.jpg',
    'ingredients' => 'Pollo, Lattuga, pomodori, Jalapegno',
    'description' => 'Taco con pollo e salse messicane.',
    'type_id' => 1,
    'price' => 6.99,
    'visibility' => true,
    'restaurant_id' => 7
  ],
  [
    'name' => 'Insalata di Stagione',
    'image' => 'img/products/insalata.jpg',
    'ingredients' => 'Lattuga, pomodori, cetrioli, carote, condimento',
    'description' => 'Insalata fresca con verdure di stagione.',
    'type_id' => 2,
    'price' => 6.99,
    'visibility' => true,
    'restaurant_id' => 7
  ],
  [
    'name' => 'Gelato alla Vaniglia',
    'image' => 'img/products/gelato_vaniglia.jpg',
    'ingredients' => 'Latte, zucchero, vaniglia',
    'description' => 'Gelato cremoso alla vaniglia.',
    'type_id' => 3,
    'price' => 4.99,
    'visibility' => true,
    'restaurant_id' => 8
  ],
  [
    'name' => 'Tiramisù',
    'image' => 'img/products/tiramisu.jpg',
    'ingredients' => 'Savoiardi, caffè, mascarpone, cacao',
    'description' => 'Dolce italiano tradizionale.',
    'type_id' => 3,
    'price' => 5.99,
    'visibility' => true,
    'restaurant_id' => 8
  ],
  [
    'name' => 'Birra Artigianale',
    'image' => 'img/products/birra_artigianale.jpg',
    'ingredients' => 'Acqua, malto, luppolo, lievito',
    'description' => 'Birra artigianale di produzione locale.',
    'type_id' => 7,
    'price' => 4.99,
    'visibility' => true,
    'restaurant_id' => 9
  ],
  [
    'name' => 'Vino Rosso',
    'image' => 'img/products/vino_rosso.jpg',
    'ingredients' => 'Uva, lievito',
    'description' => 'Vino rosso di qualità.',
    'type_id' => 6,
    'price' => 12.99,
    'visibility' => true,
    'restaurant_id' => 10
  ],
  [
    'name' => 'Bibita Gassata',
    'image' => 'img/products/bibita_gassata.jpg',
    'ingredients' => 'Acqua, zucchero, anidride carbonica, aromi',
    'description' => 'Bibita gassata classica.',
    'type_id' => 8,
    'price' => 1.99,
    'visibility' => true,
    'restaurant_id' => 11
  ],
  [
    'name' => 'Bibita Analcolica',
    'image' => 'img/products/bibita_analcolica.jpg',
    'ingredients' => 'Acqua, zucchero, aromi',
    'description' => 'Bibita analcolica rinfrescante.',
    'type_id' => 8,
    'price' => 2.49,
    'visibility' => true,
    'restaurant_id' => 12
  ],
  [
    'name' => 'Kebab Misto',
    'image' => 'img/products/kebab_misto.jpg',
    'ingredients' => 'Carne di pollo e manzo, pane pita, insalata, salsa',
    'description' => 'Kebab misto con carne di pollo e manzo.',
    'type_id' => 5,
    'price' => 7.99,
    'visibility' => true,
    'restaurant_id' => 9
  ],
  [
    'name' => 'Kebab Manzo',
    'image' => 'img/products/kebab_manzo.jpg',
    'ingredients' => 'Carne di pollo e manzo, pane pita, insalata, salsa',
    'description' => 'Kebab misto con carne di pollo e manzo.',
    'type_id' => 5,
    'price' => 5.99,
    'visibility' => true,
    'restaurant_id' => 9
  ],
  [
    'name' => 'Kebab Misto',
    'image' => 'img/products/kebab_misto.jpg',
    'ingredients' => 'Carne di pollo e manzo, pane pita, insalata, salsa',
    'description' => 'Kebab misto con carne di pollo e manzo.',
    'type_id' => 5,
    'price' => 7.99,
    'visibility' => true,
    'restaurant_id' => 11
  ],
  [
    'name' => 'Kebab Manzo',
    'image' => 'img/products/kebab_manzo.jpg',
    'ingredients' => 'Carne di pollo e manzo, pane pita, insalata, salsa',
    'description' => 'Kebab misto con carne di pollo e manzo.',
    'type_id' => 5,
    'price' => 5.99,
    'visibility' => true,
    'restaurant_id' => 11
  ],
  [
    'name' => 'Pad Thai',
    'image' => 'img/products/pad_thai.jpg',
    'ingredients' => 'Spaghetti di riso, gamberi, tofu, uova, arachidi, salsa di tamarindo',
    'description' => 'Piatto tradizionale thailandese.',
    'type_id' => 1,
    'price' => 10.99,
    'visibility' => true,
    'restaurant_id' => 10
  ],
  [
    'name' => 'Bistecca di Manzo',
    'image' => 'img/products/bistecca.jpg',
    'ingredients' => 'Bistecca di manzo, contorno misto',
    'description' => 'Bistecca di manzo alla griglia.',
    'type_id' => 2,
    'price' => 19.99,
    'visibility' => true,
    'restaurant_id' => 5
  ],
  [
    'name' => 'Insalata di Mare',
    'image' => 'img/products/insalata_di_mare.jpg',
    'ingredients' => 'Frutti di mare misti, lattuga, pomodorini',
    'description' => 'Insalata fresca con frutti di mare.',
    'type_id' => 2,
    'price' => 12.99,
    'visibility' => true,
    'restaurant_id' => 6
  ]
];
return ($products);
