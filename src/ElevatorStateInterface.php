<?php

namespace Elevator;

use Elevator\State\Close;
use Elevator\State\Move;
use Elevator\State\Open;
use Elevator\State\Stop;

interface ElevatorStateInterface
{
    public function open(): Open;
    public function close(): Close;
    public function move(): Move;
    public function stop(): Stop;
}