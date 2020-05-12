<?php

class Area
{
    private $map;

    private $style = " style='border: 1px black solid'";
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
        $str = "<table$this->style$this->class>\n";

        foreach ($this->map  as $i => $value) {
            $str .= "\t<tr>\n";
            foreach ($value  as $j => $cell) {
                $mark = "<a href='?action=shot&i=$i&j=$j'> </a>";
                if ($cell === 1) {
                    $mark = "<img src='cross.png'>";
                } else if ($cell === 0) {
                    $mark = "<img src='null.png'>";
                }
                $str .= "\t\t<td$this->style>$mark</td>\n";
            }
            $str .= "\t</tr>\n";
        }
        $str .= "</table>\n";


        return $str;
    }
}
