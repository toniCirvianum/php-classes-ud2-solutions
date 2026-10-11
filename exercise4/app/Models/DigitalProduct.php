<?php

namespace App\Models;

class DigitalProduct extends Product
{
    public $fileSize;

    public function __construct($name, $price, $fileSize)
    {
        parent::__construct($name, $price);
        $this->fileSize = $fileSize;
    }

    public function showInfo()
    {
        return parent::showInfo() . " - File size: " . $this->fileSize . " MB";
    }
}
