<?php

require_once __DIR__ . '/Models/Movie.php';

$spiderman = new Movie('Spiderman','Stan Lee', 14);

// $spiderman->name = 'Spiderman';
// $spiderman->author = 'Stan Lee';
$spiderman->relase_date = '2002-04-29';
// $spiderman->price = 14;

var_dump($spiderman);
$spiderman->finalPrice();