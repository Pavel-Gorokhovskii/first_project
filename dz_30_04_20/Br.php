<?php

class Br extends Tag
{

    public function html()
    {
        return "<br$this->id$this->class$this->style>";
    }
}
