<?php
class Table
{
    protected $table;
    protected $data;
    protected $border;
    protected $width;
    protected $height;

    public function __construct()
    {
        $this->clear();
    }

    public function clear(): self
    {
        $this->style = '';
        $this->data = '';
        return $this;
    }

    public function style(string $border, string $width, string $height): self
    {
        $this->border = $border;
        $this->width = $width;
        $this->height = $height;
        $this->style = "style='border: $this->border; 
        width: $this->width; height:$this->height'" . "align='center'";
        return $this;
    }

    public function data(array $data): self
    {
        $str = "";

        foreach ($data as $row) {
            $str .= "<tr>";
            foreach ($row as $cell) {
                $str .= "<td $this->style>$cell</td>";
            }
            $str .= "</tr>";
        }

        $this->data = $str;
        return $this;
    }
    public function html()
    {
        return "<table>$this->data</table>";
    }
}
