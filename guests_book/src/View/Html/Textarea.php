<?php

namespace View\Html;

class Textarea
{
    protected $row = " row='50'";
    protected $coll = " coll='50'";
    protected $class;
    protected $style;
    protected $name;
    protected $innerText;

    public function setRow(int $row)
    {
        $this->row = " row='$row'";
        return $this;
    }

    public function setColl(int $coll)
    {
        $this->coll = " coll='$coll'";
        return $this;
    }

    public function setStyle(string $style)
    {
        $this->style = " style='$style'";
        return $this;
    }

    public function setInnerText(string $innerText)
    {
        $this->innerText = $innerText;
        return $this;
    }

    public function setClass(string $class)
    {
        $this->class = " class='$class'";
        return $this;
    }

    public function setName(string $name)
    {
        $this->name = " name='$name'";
        return $this;
    }

    public function html()
    {
        return "<textarea $this->name$this->class$this->style$this->coll$this->row>$this->innerText</textarea>";
    }
}
