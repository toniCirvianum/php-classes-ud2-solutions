<?php

require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/PhysicalProduct.php";
require_once __DIR__ . "/Models/DigitalProduct.php";

use App\Models\PhysicalProduct;
use App\Models\DigitalProduct;

$book = new PhysicalProduct("PHP Book", 30, 0.8);
$course = new DigitalProduct("PHP Course", 50, 250);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Inheritance</h1>
    <p>
        DIGITAL PRODUCT: <?=  $course->showInfo()?>
    </p>
        <p>
        PHYSICAL PRODUCT: <?=  $book->showInfo()?>
    </p>
    
</body>
</html>
