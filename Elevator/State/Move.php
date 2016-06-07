<?php
/**
 * @author Manuel Wildauer <m.wildauer@gmail.com>
 */

namespace Elevator\State;

class Move extends \Elevator\ElevatorState
{
    public function move()
    {
        return new Move();
    }
    
    public function stop()
    {
        return new Stop();
    }
}