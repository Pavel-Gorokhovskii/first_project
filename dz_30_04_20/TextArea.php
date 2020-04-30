<?php

class TextArea extends Name
{
    private $row = 50;
    private $coll = 50;

    public function setRow(int $row)
    {
        $this->row = $row;
        return $this;
    }

    public function setColl(int $coll)
    {
        $this->coll = $coll;
        return $this;
    }

    public function html()
    {
        return "<textarea name='$this->name' id='$this->id' 
        class=''$this->class style='$this->style' coll='$this->coll' 
        row='$this->row'>$this->innerText</textarea>";
    }
}
