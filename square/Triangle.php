<?php
class Triangle
{
    private $a;
    private $b;
    private $c;
    public function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }
    public function perimetr()
    {
        return $this->a  + $this->b + $this->c;
    }
    public function area()
    {
        $p = ($this->a  + $this->b + $this->c) / 2;
        $S = sqrt($p * ($p - $this->a) * ($p - $this->b) * ($p - $this->c));
        return $S;
    }
}
