<?php

namespace Point;

class Point implements PointInterface
{

    protected $x;
    protected $y;

    public function setX(int $x): Point
    {
        $this->x = $x;
        return $this;
    }

    public function setY(int $y): Point
    {
        $this->y = $y;
        return $this;
    }

    public function getX(): int
    {
        return $this->x;
    }

    public function getY(): int
    {
        return $this->y;
    }
}
