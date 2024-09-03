<?php

require_once __DIR__ . '/Models/Movie.php';

$spiderman = new Movie();

$spiderman->name = 'spiderman';
$spiderman->author = 'Boh';
$spiderman->relaseDate = '10-23-2003';
$spiderman->price = 14;

var_dump($spiderman);