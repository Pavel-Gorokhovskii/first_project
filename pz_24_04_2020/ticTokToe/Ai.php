<?php

/**
 * Искуственный интелект для игры в крестики нолики 
 */
class Ai extends Tictac
{
    private $moves = [];
    private function putRand(string $method)
    {
        if ($this->checWin() === null) {
            $this->searchEmptyCells();

            if (count($this->moves) > 1) {
                $move = $this->moves[random_int(0, count($this->moves) - 1)];
            } else {
                $move = $this->moves[0];
            }

            if (!empty($move)) {
                $this->$method($move["i"], $move["j"]);
            }
        }
        return $this;
    }

    public function putRandCross()
    {
        return $this->putRand("putCross");
    }

    public function putRandNull()
    {
        return $this->putRand("putNull");;
    }

    public function searchEmptyCells()
    {
        $this->moves = [];
        foreach ($this->map as $i => $row) {
            foreach ($row as $j => $cell) {
                if ($cell === null) {
                    $this->moves[] = ["i" => $i, "j" => $j];
                }
            }
        }
    }
    /**
     *  Игра компьетра самого с собой
     */
    public function selfGaming()
    {
        $mapSize = $this->mapSize() ** 2;
        $count = 0;
        while ($this->checWin() === null && $count < $mapSize) {
            $this->putRandNull();
            $this->putRandCross();

            $count++;
        }
    }
}
