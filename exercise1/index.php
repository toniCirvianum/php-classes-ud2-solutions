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