<?php

class I extends Tag
{
    public function html()
    {
        return "<u>$this->innerText</u>";
    }
}