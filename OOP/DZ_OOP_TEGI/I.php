<?php

class I extends PairTag
{
    public function html()
    {
        return "<u>$this->innerText</u>";
    }
}
