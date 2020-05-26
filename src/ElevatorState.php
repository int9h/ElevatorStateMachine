<?php
/**
 * 
 * @author Manuel Wildauer <m.wildauer@gmail.com>
 */

namespace Elevator;

class ElevatorState implements ElevatorStateInterface
{
    public function close()
    {
        throw new \Elevator\Exception\IllegalStateTransitionException();
    }

    public function move()
    {
        throw new \Elevator\Exception\IllegalStateTransitionException();
    }

    public function open()
    {
        throw new \Elevator\Exception\IllegalStateTransitionException();
    }
    
    public function stop()
    {
        throw new \Elevator\Exception\IllegalStateTransitionException();
    }
}
