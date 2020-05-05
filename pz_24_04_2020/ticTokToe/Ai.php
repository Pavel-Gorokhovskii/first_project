<?php

class Ai extends Tictac
{
    private $moves = [];
    private function putRand(string $method)
    {
        if ($this->checWin() === null) {
            $this->searchEmptyCells();
            $move = $this->moves[random_int(0, count($this->moves) - 1)];
            $this->$method($move["i"], $move["j"]);
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
}
