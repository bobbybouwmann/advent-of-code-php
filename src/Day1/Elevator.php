<?php

namespace App\Day1;

class Elevator
{
    private $floor = 0;

    /**
     * Let the elevator go up.
     */
    public function goUp()
    {
        $this->floor++;
    }

    /**
     * Let the elevator go down.
     */
    public function goDown()
    {
        $this->floor--;
    }

    /**
     * Get the current floor.
     *
     * @return int
     */
    public function floor()
    {
        return $this->floor;
    }
}