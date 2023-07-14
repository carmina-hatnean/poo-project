<?php
require_once 'Robot.php';
require_once 'Drone.php';

class FlyingRobot
{
    use DroneTrait, RobotTrait{
        DroneTrait::setMaxSpeed insteadof RobotTrait;
        DroneTrait::getMaxSpeed insteadof RobotTrait;
        DroneTrait::setMaxSpeed as setFlyingMaxSpeed;
        DroneTrait::getMaxSpeed as getFlyingMaxSpeed;
        DroneTrait::setMaxSpeed as setRunningMaxSpeed;
        DroneTrait::getMaxSpeed as getRunningMaxSpeed;
    }

    public function __construct($maxRunningSpeed, $maxWalkingTime,$maxFlyingSpeed,$maxFlyingTime)
    {
        $this->maxWalkingTime=$maxWalkingTime;
        $this->maxRunningSpeed=$maxRunningSpeed;
        $this->setFlyingMaxSpeed($maxFlyingSpeed);
        $this->setRunningMaxSpeed($maxRunningSpeed);
    }
}
$flyingRobor = new FlyingRobot(40,120,60,30);
echo $flyingRobor->getMaxSpeed() . PHP_EOL;
echo $flyingRobor->getRunningMaxSpeed() . PHP_EOL;