<?php

namespace Elevator;

use Elevator\Exception\IllegalStateTransitionException;
use Elevator\State\Close;
use Elevator\State\Move;
use Elevator\State\Open;
use Elevator\State\Stop;

class ElevatorState implements ElevatorStateInterface
{
    public function close(): Close
    {
        throw new IllegalStateTransitionException();
    }

    public function move(): Move
    {
        throw new IllegalStateTransitionException();
    }

    public function open(): Open
    {
        throw new IllegalStateTransitionException();
    }
    
    public function stop(): Stop
    {
        throw new IllegalStateTransitionException();
    }
}
