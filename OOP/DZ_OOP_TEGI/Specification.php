<?php

abstract class Specification
{
    private $syntax;



    public function __construct($syntax)
    {
        $this->syntax = $syntax;
    }

    public function teg()
    {
        return "Тег $this->syntax \n";
    }
}