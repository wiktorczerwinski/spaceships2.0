<?php
//load
//unload

class Cargo{
    // Properties
    public bool $isAlive;
    private int $fuel;
    public int $hitPoints;
    public int $load;
    public int $unload;

    // Constructor
    public function __construct(
                                $fuel = 100,
                                $hitPoints = 100,
                                $isAlive = true)
    {
        $this->fuel = $fuel;
        $this->hitPoints = $hitPoints;
        $this->isAlive = true;
    }
    // Methods | functions

    // Hit
    public function Hit($damage){
        if($this->hitPoints - $damage = 0){
            $this->hitPoints -=$damage;
        } else {
            $this->isAlive = false;
        }
    }
    // Move
    public function Move(){
        $fuelUsage = 2;
        if($this->fuel - $fuelUsage > 0){
            $this->fuel -= $fuelUsage;
        } else{
            $this->fuel = 0;
        }
    }
    // Get | set
    public function Refuel($fuel){
        $this->fuel = $fuel;
    }

}