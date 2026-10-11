<?php

require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/User.php";

use App\Models\Product;
use App\Models\User;

$product = new Product("Monitor", 199.90);
$user = new User("Laura", "laura@email.com");

echo $product->showInfo() . PHP_EOL;
echo $user->showInfo() . PHP_EOL;
