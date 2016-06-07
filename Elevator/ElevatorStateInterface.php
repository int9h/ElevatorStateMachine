<?php
/**
 * 
 * @author Manuel Wildauer <m.wildauer@gmail.com>
 */

namespace Elevator;

interface ElevatorStateInterface
{
    public function open();
    public function close();
    public function move();
    public function stop();
}