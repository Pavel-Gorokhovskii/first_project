<?php
class H
{
    protected $innerText;
    protected $level1;
    protected $level2;
    protected $level3;
    protected $level4;
    protected $level5;
    protected $level6;

    public function __construct($level = 1)
    {

        $this->clear($level);
    }
    public function clear($level = 1): self
    {

        $this->class =
            $this->id =
            $this->style =
            $this->innerText = '';
        $this->level($level);
        return $this;
    }


    public function level(int $level)
    {
        if ($level >= 1 && $level <= 6) {
            $this->level = $level;
        } elseif ($level > 6) {
            $this->level = 6;
        } elseif ($level < 1) {
            $this->level = 1;
        }

        return $this;
    }
    public function innerText(string $innerText): self
    {
        $this->innerText = $innerText;
        return $this;
    }
    public function id(string $id): self
    {
        $this->id = " id='$id'";
        return $this;
    }
    public function class(string $class): self
    {
        $this->class = " class ='$class'";
        return $this;
    }
    public function style(string $style): self
    {
        $this->style = " style = '$style'";
        return $this;
    }

    public function HTML()
    {
        return "<h$this->level$this->class$this->id$this->style>$this->innerText</h$this->level>";
    }
}
