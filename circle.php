<?php
include_once "shape.php";

class Circle extends Shape
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
        return $this->radius * $this->radius * pi();
    }

    public function calculatePerimeter()
    {
        return pi() * $this->radius * 2;
    }
}
