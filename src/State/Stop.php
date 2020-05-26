<?php

namespace Elevator\State;

use Elevator\ElevatorState;

class Stop extends ElevatorState
{
    public function open(): Open
    {
        return new Open();
    }
    
    public function close(): Close
    {
        return new Close();
    }
    
    public function move(): Move
    {
        return new Move();
    }
    
    public function stop(): Stop
    {
        return new Stop();
    }
}
