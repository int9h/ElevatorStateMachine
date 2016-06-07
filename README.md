# ElevatorStateMachine

This simple implementation explains the state pattern in php.

## Example 

```
$ php56 run.php     
set state to : Elevator\State\Stop    
set state to : Elevator\State\Close                                                                                                                                                                             
set state to : Elevator\State\Open                                                                                                                                                                              
bool(true)                                                                                                                                                                                                      
set state to : Elevator\State\Close                                                                                                                                                                             
bool(false)                                                                                                                                                                                                     
set state to : Elevator\State\Move                                                                                                                                                                              
set state to : Elevator\State\Stop                                                                                                                                                                              
set state to : Elevator\State\Open                                                                                                                                                                              
PHP Fatal error:  Uncaught exception 'Elevator\Exception\IllegalStateTransitionException' in /home/manuel/NetBeansProjects/ElevatorStateMachine/Elevator/ElevatorState.php:18                                   
Stack trace:                                                                                                                                                                                                    
#0 /home/manuel/NetBeansProjects/ElevatorStateMachine/Elevator/Elevator.php(46): Elevator\ElevatorState->move()                                                                                                 
#1 /home/manuel/NetBeansProjects/ElevatorStateMachine/run.php(22): Elevator\Elevator->move()                                                                                                                    
#2 {main}                                                                                                                                                                                                       
  thrown in /home/manuel/NetBeansProjects/ElevatorStateMachine/Elevator/ElevatorState.php on line 18  
```

Take a look at the run.php file to see what happened.

