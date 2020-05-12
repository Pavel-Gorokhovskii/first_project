<?php

class TestClass
{

    //на вход принимает любой класс, который имплементирует интерфейс
    public function run(FileInterface $saver)
    {
        print_r(
            $saver
                ->save(['a', 'b', 'c'])
                ->load()
        );
    }
}
