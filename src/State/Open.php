<?php
namespace Elevator\State;

use Elevator\ElevatorState;

class Open extends ElevatorState
{
    public function open(): Open
    {
        return new Open();
    }
    
    public function close(): Close
    {
        return new Close();
    }
}