<?php

namespace App\Models;

class Product
{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function showInfo()
    {
        return $this->name . " - " . number_format($this->price, 2) . " EUR";
    }
}
