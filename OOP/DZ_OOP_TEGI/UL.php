<?php

class UL extends OL
{
    public function Description()
    {
        return "устанавливает маркерованный список, \n";
    }

    public function D()
    {
        echo "<br>";
        return "закрывающийся тег обязателен, \n";
    }

    public function atributTupe()
    {

        return parent::atributTupe();
    }
}