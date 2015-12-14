<?php

namespace App\Day1;

class Part1
{
    public function __invoke()
    {
        $input = file_get_contents(__DIR__ . '/../../data/day1.txt');

        $elevator = new Elevator();

        foreach(str_split($input) as $char) {
            if ($char == '(') {
                $elevator->goUp();
            } elseif ($char == ')') {
                $elevator->goDown();
            }
        }

        echo 'Floor: ' . $elevator->floor();
    }
}