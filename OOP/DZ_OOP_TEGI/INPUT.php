<?php

class INPUT extends SELECT
{
    public function Description()
    {
        return "является одним из разносторонних элементов формы
         и позволяет создавать разные элементы интерфейса и обеспечить взаимодействие с пользователем \n";

        return "имеет атрибут 'name' \n";
    }

    public function AtrName()
    {
        echo "<br>";
        return "имеет атрибут 'name' \n";
    }

    public function D()
    {

        return parent::D();
    }
}