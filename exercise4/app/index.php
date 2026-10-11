<?php

require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/PhysicalProduct.php";
require_once __DIR__ . "/Models/DigitalProduct.php";

use App\Models\PhysicalProduct;
use App\Models\DigitalProduct;

$book = new PhysicalProduct("PHP Book", 30, 0.8);
$course = new DigitalProduct("PHP Course", 50, 250);

echo $book->showInfo() . PHP_EOL;
echo $course->showInfo() . PHP_EOL;
