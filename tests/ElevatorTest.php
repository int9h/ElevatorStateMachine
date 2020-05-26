<?php
use PHPUnit\Framework\TestCase;

final class ElevatorTest extends TestCase
{
    protected $instance = null;

    public function setUp(): void
    {
        $this->instance = new \Elevator\Elevator();
    }

    public function testInitalStateIsStop(): void
    {
        $this->assertInstanceOf(\Elevator\State\Stop::class, $this->instance->getState());
    }

    public function testSetState(): void
    {
        $this->instance->setState(new \Elevator\State\Close());
        $this->assertInstanceOf(\Elevator\State\Close::class, $this->instance->getState());
    }

    public function testSetStateClose(): void
    {
        $this->instance->close();
        $this->assertInstanceOf(\Elevator\State\Close::class, $this->instance->getState());

    }

    public function testSetStateMove(): void
    {
        $this->instance->move();
        $this->assertInstanceOf(\Elevator\State\Move::class, $this->instance->getState());
    }


    public function testSetStateStop(): void
    {
        $this->instance->stop();
        $this->assertInstanceOf(\Elevator\State\Stop::class, $this->instance->getState());
    }

    public function testSetStateOpen(): void
    {
        $this->instance->open();
        $this->assertInstanceOf(\Elevator\State\Open::class, $this->instance->getState(), 'Test is State close');
    }

    public function testSetInvalidStateMove(): void
    {
        $this->instance->open();
        $this->expectException(\Elevator\Exception\IllegalStateTransitionException::class);
        $this->instance->move();
    }

    public function testSetInvalidStateClose(): void
    {
        $this->instance->move();
        $this->expectException(\Elevator\Exception\IllegalStateTransitionException::class);
        $this->instance->close();
    }

    public function testSetInvalidStateOpen(): void
    {
        $this->instance->move();
        $this->expectException(\Elevator\Exception\IllegalStateTransitionException::class);
        $this->instance->open();
    }

    public function testSetInvalidStateStop(): void
    {
        $this->instance->open();
        $this->expectException(\Elevator\Exception\IllegalStateTransitionException::class);
        $this->instance->stop();
    }

    public function testStateIsOpen(): void
    {
        $this->instance->open();
        $this->assertTrue($this->instance->isOpen());
    }

    public function testStateIsNotOpen(): void
    {
        $this->instance->close();
        $this->assertFalse($this->instance->isOpen());
    }
}