<?php

use App\Day1\Elevator;

class ElevatorTest extends PHPUnit_Framework_TestCase
{
    public function testFloorWith0Steps()
    {
        $elevator = new Elevator();

        $this->assertEquals(0, $elevator->floor());
    }

    public function testOneStepUp()
    {
        $elevator = new Elevator();
        $elevator->goUp();

        $this->assertEquals(1, $elevator->floor());
    }

    public function testMultipleStepsUp()
    {
        $amount = 5;

        $elevator = new Elevator();

        for($i = 0; $i < $amount; $i++) {
            $elevator->goUp();
        }

        $this->assertEquals($amount, $elevator->floor());
    }

    public function testOneStepDown()
    {
        $elevator = new Elevator();
        $elevator->goDown();

        $this->assertEquals(-1, $elevator->floor());
    }

    public function testMultipleStepsDown()
    {
        $amount = 5;

        $elevator = new Elevator();

        for($i = 0; $i < $amount; $i++) {
            $elevator->goDown();
        }

        $this->assertEquals(-$amount, $elevator->floor());
    }

    public function testMultipleStepsUpAndDown()
    {
        $elevator = new Elevator();

        $elevator->goUp();
        $elevator->goDown();
        $elevator->goDown();
        $elevator->goUp();
        $elevator->goUp();

        $this->assertEquals(1, $elevator->floor());
    }
}