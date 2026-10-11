<?php

namespace App\Models;

class PhysicalProduct extends Product
{
    public $weight;

    public function __construct($name, $price, $weight)
    {
        parent::__construct($name, $price);
        $this->weight = $weight;
    }

    public function showInfo()
    {
        return parent::showInfo() . " - Weight: " . $this->weight . " kg";
    }
}
