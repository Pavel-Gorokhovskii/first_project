<?php

class Areas
{
    private $map;
    public function setMap(array $map)
    {
        $this->map = $map;
        return $this;
    }

    public function style(string $style): self
    {
        $this->style = " style='$style'";
        return $this;
    }

    public function html()
    {
        $str = "<table$this->style>";
    }
}
