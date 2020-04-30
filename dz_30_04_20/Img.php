<?php

class Img extends Hr
{

    private $src;
    private $height;
    private $alt;
    private $border;

    public function setSrc(string $src)
    {
        $this->src = $src;
        return $this;
    }

    public function setHeight(int $height)
    {
        $this->height = $height;
        return $this;
    }

    public function setAlt(string $alt)
    {
        $this->alt = $alt;
        return $this;
    }

    public function setBorder(int $border)
    {
        $this->border = $border;
        return $this;
    }

    public function setWidth(int $width)
    {
        $this->width = $width;
        return $this;
    }

    public function html()
    {
        return "<img src='$this->src' alt='$this->alt' 
        height='$this->height' width='$this->width' border='$this->border'>";
    }
}
