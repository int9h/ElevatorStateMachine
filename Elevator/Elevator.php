<?php
/**
 * 
 * @author Manuel Wildauer <m.wildauer@gmail.com>
 */

namespace Elevator;

class Elevator
{
    private $state;
    
    function getState()
    {
        return $this->state;
    }

    function setState(ElevatorStateInterface $state)
    {
        $this->state = $state;
        print "set state to : " . get_class($state) . PHP_EOL;
    }
    
    public function __construct()
    {
        $this->setState(new \Elevator\State\Stop());
    }
    
    public function isOpen()
    {
        return $this->state instanceof \Elevator\State\Open;
    }
    
    public function open()
    {
        $this->setState($this->state->open());
    }
    
    public function close()
    {
        $this->setState($this->state->close());
    }
    
    public function move()
    {
        $this->setState($this->state->move());
    }
    
    public function stop()
    {
        $this->setState($this->state->stop());
    }
}
