<?php
namespace Elevator;

use Elevator\State\Open;
use Elevator\State\Stop;

class Elevator
{
    protected $state;
    
    public function getState(): ElevatorState
    {
        return $this->state;
    }

    public function setState(ElevatorStateInterface $state): void
    {
        $this->state = $state;
    }
    
    public function __construct()
    {
        $this->setState(new Stop());
    }
    
    public function isOpen(): bool
    {
        return $this->state instanceof Open;
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
