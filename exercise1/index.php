<?php

class Product
{
    private $name;
    private $price;
    private $category;

    public function showInfo()
    {
        return $this->name . " - " . number_format($this->price, 2) . " EUR - " . $this->category;
    }

    public function setPrice($price){
        $this->price = $price;
    }
    public function setName($name){
        $this->name = $name;
    }

        public function setCategory($cat){
        $this->category = $cat;
    }
}

$product1 = new Product();
$product1->setName("Mechanical Keyboard");
$product1->setPrice(59.90);
$product1->setCategory("Peripherals");

$product2 = new Product();
$product2->setName("Gaming Mouse");
$product2->setPrice(34.50);
$product2->setCategory("Peripherals");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> Products </h1>
    <p>
        <?= $product1->showInfo() ?>
    </p>
    <p>
        <?= $product2->showInfo() ?>
    </p>
</body>

</html>