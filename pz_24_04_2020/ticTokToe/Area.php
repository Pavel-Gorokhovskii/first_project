<?php

class Area
{
    private $map;

    private $style = " style = 'border: 1px solid black'";
    private $class = " class = 'tictac'";

    public function setMap(array $map)
    {
        $this->map = $map;
        return $this;
    }

    public function style(string $style): self
    {
        $this->style = $style;
        return $this;
    }

    public function class(string $class): self
    {
        $this->class = $class;
        return $this;
    }

    public function html()
    {
        $str = "<table$this->style$this->class>";

        foreach ($this->map  as $value) {
            $str .= "<tr>";
            foreach ($value  as $cell) {
                $mark = '';
                if ($cell === 1) {
                    $mark = "<img src='cross.png'>";
                } else if ($cell === 0) {
                    $mark = "<img src='null.png'>";
                }
                $str .= "<td$this->style>$mark</td>";
            }
            $str .= "</tr>";
        }
        $str .= "</table>";


        return $str;
    }
}
