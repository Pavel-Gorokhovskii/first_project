<?php

abstract class Name extends PairTag
{

    protected $name;

    public function setName(string $name)
    {
        $this->name = " name='$name'";
        return $this;
    }
}
