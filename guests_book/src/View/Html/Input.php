<?php

namespace View\Html;

class Input
{
    protected $value = '';
    protected $type = " type='text'";
    protected $name;

    public function setType(string $type)
    {
        if (in_array($type, [
            'text',
            'button',
            'submit',
            'reset',
            'password',
            'file',
            'checkbox'
        ])) {
            $this->type = " type='$type'";
        }
        return $this;
    }

    public function setValue(string $value)
    {
        $this->value = " value='$value'";
        return $this;
    }

    public function setName(string $name)
    {
        $this->name = " name='$name'";
        return $this;
    }

    public function html()
    {
        return "<input$this->type$this->value$this->name>\n";
    }
}
