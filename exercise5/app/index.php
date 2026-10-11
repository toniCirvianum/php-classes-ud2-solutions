<?php

require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Controllers/ProductController.php";

use App\Controllers\ProductController;

$controller = new ProductController();
$controller->index();
