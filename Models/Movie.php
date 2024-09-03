<?php

class Movie {
    public $name;
    public $author;
    public $relaseDate;
    public $price;

    function __construct($_name,$_author){
        $this->name = $_name;
        $this->author = $_author;
    }
}