<?php
include_once ("circle.php");
include_once ("cylinder.php");
include_once ("rectangle.php");
include_once ("square.php");
$circle = new Circle("Circle 01",6 );
echo "Circle 01 area: ". $circle->calculateArea(). '<br>';
echo "Circle 01 perimeter: ". $circle->calculatePerimeter(). '<br>';
$cylinder = new Cylinder("Cylinder 01",6,7);
echo "Cylinder 01 area: ". $cylinder->calculateArea() . '<br>';
echo "Cylinder 01 perimeter : ". $cylinder->calculateArea(). '<br>';
$rectangle = new Rectangle('Rectangle 01',7,8);
echo "Rectangle 01 are: ". $rectangle->calculateArea(). '<br>';
echo "Rectangle 01 perimeter: ".$rectangle->calculatePerimeter(). '<br>';
$square = new Square('Square 01',7,7,7);
echo "Square 01 are: ". $square->calculateArea(). '<br>';
echo "Square 01 perimeter: ". $square->calculatePerimeter(). "<br>";