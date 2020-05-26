<?php

use \PHPUnit\Framework\TestCase;

class StopTest extends TestCase
{
    protected $instance = null;

    public function setUp(): void
    {
        $this->instance = new \Elevator\State\Stop();
    }

    public function testStateTransition(): void
    {
        $this->assertInstanceOf(\Elevator\State\Open::class, $this->instance->open());
        $this->assertInstanceOf(\Elevator\State\Close::class, $this->instance->close());
        $this->assertInstanceOf(\Elevator\State\Move::class, $this->instance->move());
        $this->assertInstanceOf(\Elevator\State\Stop::class, $this->instance->stop());
    }
}