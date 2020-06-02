<?php

namespace Point;

interface SquareInterface
{

    public function setStartPoint(Point $startPoint): Square;

    public function setEndPoint(Point $endPoint): Square;

    public function getArea(): float;

    public function getPerimeter(): float;
}
