<?php

class U extends Tag
{
    public function html()
    {
        return "<i>$this->innerText</i>";
    }
}