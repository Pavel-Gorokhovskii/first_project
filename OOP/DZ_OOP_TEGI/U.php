<?php

class U extends PairTag
{
    public function html()
    {
        return "<i>$this->innerText</i>";
    }
}
