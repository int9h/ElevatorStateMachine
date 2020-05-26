<?php
/**
 * 
 * @author Manuel Wildauer <m.wildauer@gmail.com>
 */

namespace Elevator\State;

use Elevator\ElevatorState;

class Close extends ElevatorState
{
    public function close(): Close
    {
        return new Close();
    }

    public function open(): Open
    {
        return new Open();
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