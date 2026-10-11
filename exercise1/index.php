<?php

class Product
{
    public $name;
    public $price;
    public $category;

    public function showInfo()
    {
        return $this->name . " - " . number_format($this->price, 2) . " EUR - " . $this->category;
    }
}

$product1 = new Product();
$product1->name = "Mechanical Keyboard";
$product1->price = 59.90;
$product1->category = "Peripherals";

$product2 = new Product();
$product2->name = "Gaming Mouse";
$product2->price = 34.50;
$product2->category = "Peripherals";

echo $product1->showInfo() . PHP_EOL;
echo $product2->showInfo() . PHP_EOL;
