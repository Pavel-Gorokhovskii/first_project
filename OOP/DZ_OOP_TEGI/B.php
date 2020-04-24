<?php

class B extends PairTag
{
    public function html()
    {
        return "<b>$this->innerText</b>";
    }
}
