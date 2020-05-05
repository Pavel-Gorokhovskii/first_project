<?php

class B extends PairTag
{
    public function html()
    {
        return "<b$this->class$this->id>$this->innerText</b>";
    }
}
