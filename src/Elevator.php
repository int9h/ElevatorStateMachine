<?php
/**
 * 
 * @author Manuel Wildauer <m.wildauer@gmail.com>
 */

namespace Elevator;

class Elevator
{
    protected $state;
    
    function getState(): ElevatorState
    {
        return $this->state;
    }

    function setState(ElevatorStateInterface $state): void
    {
        $this->state = $state;
    }
    
    public function __construct()
    {
        $this->setState(new \Elevator\State\Stop());
    }
    
    public function isOpen(): bool
    {
        return $this->state instanceof \Elevator\State\Open;
    }
    
    public function open(): void
    {
        $this->setState($this->state->open());
    }
    
    public function close(): void
    {
        $this->setState($this->state->close());
    }
    
    public function move(): void
    {
        $this->setState($this->state->move());
    }
    
    public function stop(): void
    {
        $this->setState($this->state->stop());
    }
}
