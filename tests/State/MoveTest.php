<?php

use \PHPUnit\Framework\TestCase;

class MoveTest extends TestCase
{
    protected $instance = null;

    public function setUp(): void
    {
        $this->instance = new \Elevator\State\Move();
    }

    public function testStateTransition(): void
    {
        $this->assertInstanceOf(\Elevator\State\Move::class, $this->instance->move());
        $this->assertInstanceOf(\Elevator\State\Stop::class, $this->instance->stop());
    }
}