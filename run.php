<?php
require_once 'autoload.php';

$elevator = new Elevator\Elevator();
$elevator->close();
$elevator->open();

var_dump($elevator->isOpen());

$elevator->close();

var_dump($elevator->isOpen());

$elevator->move();
$elevator->stop();
$elevator->open();

/**
 * throw a \Elevator\Exception\IllegalStateTransitionException() 
 * because move() is not allowed in open() state
 */
$elevator->move();