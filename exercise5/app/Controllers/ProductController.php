<?php

namespace App\Controllers;

use App\Models\Product;

class ProductController
{
    public function index()
    {
        $products = [
            new Product("Keyboard", 59.90),
            new Product("Mouse", 29.90),
            new Product("Monitor", 199.90)
        ];

        foreach ($products as $product) {
            echo $product->showInfo() . PHP_EOL;
        }
    }
}
