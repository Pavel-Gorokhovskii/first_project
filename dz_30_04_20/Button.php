<?php

class Button extends Name
{

    private $type = 'submit';

    public function setType(string $type)
    {
        $this->type = $type;
        return $this;
    }

    public function html()
    {
        return "<button type='$this->type' name='$this->name'>
        $this->innerText</button> ";
    }
}
