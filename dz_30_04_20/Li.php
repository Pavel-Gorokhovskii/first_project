<?php

abstract class Li extends PairTag
{
    protected $data;


    public function setInnerData(array $data)
    {
        $this->data = '';

        foreach ($data as $value) {
            $this->data .= "<li>$value</li>";
        }
        return $this;
    }

    public function setType(string $type)
    {
        if (in_array($type, $this->avalibleType)) {
            $this->type = " type='$type'";
        }
        return $this;
    }

    public function html()
    {
        return "<$this->tagName$this->type$this->class$this->style$this->id>$this->data</$this->tagName>";
    }
}
