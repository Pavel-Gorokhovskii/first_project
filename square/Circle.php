<?php
class Circle
{
    private $d;
    public function __construct($d)
    {
        $this->d = $d;
    }
    public function perimetr()
    {
        return $this->d * 3.14;
    }
    public function area()
    {
        return 0.25 * 3.14 * ($this->d ** 2);
    }
}
