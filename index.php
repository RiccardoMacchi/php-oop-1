<?php

require_once __DIR__ . '/Models/Movie.php';

$spiderman = new Movie('Spiderman','Stan Lee');

// $spiderman->name = 'Spiderman';
// $spiderman->author = 'Stan Lee';
$spiderman->relaseDate = '2002-04-29';
$spiderman->price = 14;

var_dump($spiderman);