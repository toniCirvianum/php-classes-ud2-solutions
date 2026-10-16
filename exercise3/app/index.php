<?php

// require_once "./Models/Product.php";
// require_once "./Models/User.php";

require_once __DIR__."/Models/Product.php";
require_once __DIR__."/Models/User.php";

use App\Models\Product;
use App\Models\User;

$product = new Product("Monitor", 199.90);
$user = new User("Laura", "laura@email.com");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Classes and namespaces</h1>
    <p>
        PRODUCT: <?=  $product->showInfo() ?>
    </p>
        <p>
        USER: <?=  $user->showInfo() ?>
    </p>
</body>
</html>

