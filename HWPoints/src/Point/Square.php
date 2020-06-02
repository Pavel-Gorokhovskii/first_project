<?php

namespace Point;

class Square implements SquareInterface
{
    protected $startPoint;
    protected $endPoint;

    public function setStartPoint(Point $startPoint): Square
    {
        $this->startPoint = $startPoint;

        return $this;
    }


    public function setEndPoint(Point $endPoint): Square
    {
        $this->endPoint = $endPoint;

        return $this;
    }


    public function getArea(): float
    {
        $a = $this->endPoint->getX() - $this->startPoint->getX();
        $b = $this->endPoint->getY() - $this->startPoint->getY();

        return $a * $b;
    }

    public function getPerimeter(): float
    {
        $a = $this->endPoint->getX() - $this->startPoint->getX();
        $b = $this->endPoint->getY() - $this->startPoint->getY();

        return ($a + $b) * 2;
    }
}
