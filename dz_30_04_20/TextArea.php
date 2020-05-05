<?php

class TextArea extends Name
{
    private $row = 50;
    private $coll = 50;

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

    public function html()
    {
        return "<textarea$this->name$this->id$this->class$this->style$this->coll$this->row>$this->innerText</textarea>";
    }
}
