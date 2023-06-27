<?php

class Rectangle
{

    function __construct(
        public int $width = 0,
        public int $height = 0)
    {
    }

    // tinh dien tich
    function getArea(): int
    {
        return $this->width * $this->height;
    }

    //tinh chu vi
    function getPerimeter(): int
    {
        return (($this->width + $this->height) * 2);
    }

    function display(): string
    {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }
}