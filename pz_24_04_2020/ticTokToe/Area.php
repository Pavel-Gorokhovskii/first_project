<?php

class Area
{
    private $map;

    public function setMap(array $map)
    {
        $this->map = $map;
        return $this;
    }

    public function style(string $border, string $width, string $height): self
    {
        $this->border = $border;
        $this->width = $width;
        $this->height = $height;
        $this->style = " style='border: $this->border; width: $this->width; height:$this->height' align='center'";
        return $this;
    }

    public function html()
    {
        $str = "<table>";

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
