<?php

class Movie {
    public $name;
    public $author;
    public $relase_date;
    public $price;
    public $discount_period;

    function __construct($_name,$_author,$_price){
        $this->name = $_name;
        $this->author = $_author;
        $this->price = $_price;
    }

    public function discountOnPeriod(){
        $actual_month = 8;
        if($actual_month >= 6 && $actual_month <= 8){
            $discount = 0.10;
        } elseif($actual_month === 11 || $actual_month === 12 || $actual_month === 1 || $actual_month === 2) {
            $discount = 0.20;
        } else {
            $discount = 0;
        }
        return $discount;
        
    }

    public function finalPrice(){
        $discount = $this->discountOnPeriod();
        $final_price = $this->price * (1 - $discount);
        echo number_format($final_price,2,',','.');
    }
}