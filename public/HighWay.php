<?php


abstract class HighWay
{
    protected $currentVehicles =[];
    protected $nbLane;
    protected $maxSpeed;

    /**
     * @return mixed
     */
    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    /**
     * @param mixed $currentVehicles
     * @return HighWay
     */
    public function setCurrentVehicles( $currentVehicles):void
    {
        $this->currentVehicles[] = $currentVehicles;

    }

    /**
     * @return mixed
     */
    public function getNbLane():int
    {
        return $this->nbLane;
    }

    /**
     * @param mixed $nbLane
     * @return HighWay
     */
    public function setNbLane(int $nbLane):int
    {
        $this->nbLane = $nbLane;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaxSpeed():int
    {
        return $this->maxSpeed;
    }

    /**
     * @param mixed $maxSpeed
     * @return HighWay
     */
    public function setMaxSpeed(int $maxSpeed):int
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }
    abstract protected function addVehicle(Vehicle $vehicle);



}