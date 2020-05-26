<?php

namespace Elevator\State;

use Elevator\ElevatorState;

class Move extends ElevatorState
{
    public function move(): Move
    {
        return new Move();
    }
    
    public function stop(): Stop
    {
        return new Stop();
    }
}