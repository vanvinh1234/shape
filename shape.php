<?php

class Shape
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {
        "I am a shape. My name is $this->name";
    }
}
