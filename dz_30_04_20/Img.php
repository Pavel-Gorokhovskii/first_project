<?php

class Img extends Tag
{

    private $src;
    private $height;
    private $alt;
    private $border;
    private $width;

    public function setSrc(string $src)
    {
        $this->src = " src='$src'";
        return $this;
    }

    public function setHeight(int $height)
    {

        $this->height = " height='$height'";
        return $this;
    }

    public function setAlt(string $alt)
    {
        $this->alt = " alt='$alt'";
        return $this;
    }

    public function setBorder(int $border)
    {
        $this->border = " border='$border'";
        return $this;
    }

    public function setWidth(int $width)
    {
        $this->width = " width='$width'";
        return $this;
    }

    public function html()
    {
        return "<img$this->src$this->alt" .
            "$this->height$this->width$this->border>";
    }
}
