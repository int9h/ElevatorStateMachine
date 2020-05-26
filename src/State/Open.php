<?php
/**
 * @author Manuel Wildauer <m.wildauer@gmail.com>
 */

namespace Elevator\State;

class Open extends \Elevator\ElevatorState
{
    public function open()
    {
        return new Open();
    }
    
    public function close()
    {
        return new Close();
    }
}