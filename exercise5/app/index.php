<?php

require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Controllers/ProductController.php";

use App\Controllers\ProductController;


$controller = new ProductController();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Small MVC</h1>
    <p>
        PRODUCTS: 
    </p>
    <p>
        <? $controller->index() ?>
    </p>
    
</body>
</html>





