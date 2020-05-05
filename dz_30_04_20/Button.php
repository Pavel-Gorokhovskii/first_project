<?php

class Button extends Name
{

    private $type = 'submit';

    public function setType(string $type)
    {
        $this->type = " type='$type'";
        return $this;
    }

    public function html()
    {
        return "<button$this->type$this->name>"
            . "$this->innerText</button>";
    }
}
