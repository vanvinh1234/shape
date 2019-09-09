<?php
include_once("shape.php");

class Rectangle extends Shape
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea()
    {
        return $this->width * $this->height;
    }

    public function calculatePerimeter()
    {
        return $this->width * $this->height * 2;
    }
}
