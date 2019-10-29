<?php

require_once 'Vehicle.php';
class Truck extends Vehicle
{
    const ALLOWED_ENERGIES = ['fuel','electric'];
    private $capacity;
    private $load =0 ;
    private $energy;
    public  function  getLoad():int
    {
        return  $this->load;
    }

    public  function  setLoad( int $load): Truck
    {
        if ($load < 0){
            $this->load = 0;
        }
            $this->load = $load;

        return $this;
    }
    public function setCapacity(int $capacity):void
    {
        if ($capacity< 0){
            $this->capacity = 1;
        }$this->capacity = $capacity;
    }
    public function getCapacity():int
    {
        return $this->capacity;
    }
    public function getEnergy():string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy):Truck
    {
        if(in_array($energy,self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public  function __construct(string $color, int $nbSeats,string $energy,int $capacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->setCapacity($capacity);
    }

    public function isFull():string
    {
        $message = "";
        if($this->load < $this->capacity) {
              $message = "In filling<br>";
           }
        else {
            $message = "Full";
        }

        return $message;
    }

    public function changeWheel()
    {
        // TODO: Implement changeWheel() method.
    }
}