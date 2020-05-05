<?php

class Tictac
{
    public $map = [];

    public function __construct(int $n = 3)
    {
        $this->n = $n;
        $this->initMap($n);
    }

    public function getMap()
    {
        return $this->map;
    }

    public function initMap(int $n)
    {
        $this->map = [];

        for ($i = 0; $i < $n; $i++) {

            $row = [];

            for ($j = 0; $j < $n; $j++) {
                $row[] = null;
            }

            $this->map[] = $row;
        }
        return $this;
    }

    public function putCross(int $i, int $j)
    {
        if ($this->available($i, $j)) {
            $this->map[$i][$j] = 1;
        }
        return $this;
    }

    public function putNull(int $i, int $j)
    {
        if ($this->available($i, $j)) {
            $this->map[$i][$j] = 0;
        }
        return $this;
    }

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

    private function transpose($array)
    {
        return array_map(null, ...$array);
    }

    private function checWinByRow($map)
    {
        foreach ($map as $row) {
            $winner = $row[0];
            for ($i = 1; $i < count($row); $i++) {
                if ($row[$i] !== $row[$i - 1]) {
                    $winner = null;
                }
            }
            if ($winner !== null) {
                return $winner;
            }
        }
        return null;
    }

    public function checWin()
    {
        if (($winner = $this->checWinByRow($this->map)) !== null) {
            return $winner;
        }
        if (($winner = $this->checWinByCol()) !== null) {
            return $winner;
        }

        if (($winner = $this->checWinByMainDiag($this->map)) !== null) {
            return $winner;
        }

        if (($winner = $this->checWinBySecondDiag($this->map)) !== null) {
            return $winner;
        }
        return null;
    }

    public function checWinByCol()
    {
        return $this->checWinByRow($this->transpose($this->map));
    }


    public function checWinByMainDiag(array $map)
    {
        $winner = $map[0][0];

        for ($i = 0; $i < count($map[$i]); $i++) {

            for ($j = 0; $j < count($map[$i]); $j++) {

                if ($i = $j && $map[$i][$j] !== null) {

                    if ($winner === $map[$i][$j]) {
                        return $winner;
                    }
                }
            }
            return null;
        }
    }


    public function checWinBySecondDiag(array $map)
    {

        $winner = $map[0][2];

        for ($i = 0; $i < count($map[$i]); $i++) {
            for ($j = 0; $j < count($map[$i]); $j++) {

                if (($j === (count($map[$i]) - 1) && $i == 0) ||
                    ($i = $j && $map[$i][$j] !== null) ||
                    ($i === (count($map[$i]) - 1) && $j == 0)
                ) {

                    if ($winner === $map[$i][$j]) {
                        return $winner;
                    }
                }
            }
            return null;
        }
    }

    public function available(int $i, int $j): bool
    {
        $av = false;

        if ($i >= 0 && $i < count($this->map)) {
            if ($j >= 0 && $j < count($this->map[0])) {
                if ($this->map[$i][$j]  === null) {
                    $av = true;
                }
            }
        }

        return $av;
    }
}
