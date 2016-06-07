<?php
/** 
 * @author Manuel Wildauer <m.wildauer@gmail.com>
 */

namespace Elevator\State;

class Stop extends \Elevator\ElevatorState
{
    public function open()
    {
        return new Open();
    }
    
    public function close()
    {
        return new Close();
    }
    
    public function move()
    {
        return new Move();
    }
    
    public function stop()
    {
        return new Stop();
    }
}
