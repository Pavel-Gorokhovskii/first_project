<?php

class TestClass
{
    public function run(FileInterface $saver)
    {
        print_r(
            $saver
                ->save([1, 2, 3])
                ->load()
        );
    }
}
