<?php
class Rectangle
{
    public $width = 0;
    public $height = 0;

    function __construct($w = 0, $h = 0)
    {
        $this->width = $w;
        $this->height = $h;
    }
    function getArea()
    {
        return ($this->width * $this->height);
    }

    function getPerimeter()
    {
        return (($this->width + $this->height) * 2);
    }

    function isSquare()
    {
        if ($this->width == $this->height) {
            return ("this is a square because all sides are equal");
        } else {
            return ("this is not a square");
        }
    }
}
;

?>