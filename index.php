<?php

require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/data/db.php';

// $spiderman = new Movie('Spiderman','Stan Lee', 14);

// $spiderman->release_date = '2002-04-29';
// $spiderman->name = 'Spiderman';
// $spiderman->author = 'Stan Lee';
// $spiderman->price = 14;
// $spiderman->addCategory(['Fantasy','Superhero']);

// $inception = new Movie('Inception', 'Christopher Nolan', 13);
// $inception->release_date = '2010-07-16';
// $inception->addCategory(['Sci-Fi', 'Thriller']);

// $the_matrix = new Movie('The Matrix', 'The Wachowskis', 16);
// $the_matrix->release_date = '1999-03-31';
// $the_matrix->addCategory(['Sci-Fi', 'Action']);

// $titanic = new Movie('Titanic', 'James Cameron', 12);
// $titanic->release_date = '1997-12-19';
// $titanic->addCategory(['Romance', 'Drama']);

// $the_godfather = new Movie('The Godfather', 'Francis Ford Coppola', 17);
// $the_godfather->release_date = '1972-03-24';
// $the_godfather->addCategory(['Crime', 'Drama']);


// var_dump($spiderman);
// $spiderman->finalPrice();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php foreach($db as $movie): ?>
        <h3><?php echo $movie->name ?></h3>
        <h5><?php echo $movie->author ?></h5>
        <h5>Il prezzo è di: <?php echo number_format($movie->price,2,',','.') ?></h5>
        <h5>Il prezzo scontato è di: <?php $movie->finalPrice() ?></h5>
        <h4>Categoria: <?php echo $movie->printCategory() ?></h4>
        <? endforeach; ?>
    </div>
</body>
</html>