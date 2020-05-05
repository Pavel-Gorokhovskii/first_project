<?php

class Random extends Tictac
{

    public function putRandCross()
    {
        $i = rand(0, ($this->n - 1));
        $j = rand(0, ($this->n - 1));

        if ($this->available($i, $j)) {
            $this->map[$i][$j] = 1;

            return $this;
        }
    }

    public function putRandNull()
    {
        $i = rand(0, ($this->n - 1));
        $j = rand(0, ($this->n - 1));

        if ($this->available($i, $j)) {
            $this->map[$i][$j] = 0;

            return $this;
        }
    }
}
