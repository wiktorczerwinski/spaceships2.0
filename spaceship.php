<?php

class Spaceship{
    // Properties
    public bool $isAlive;
    public int $fuel;
    public int $hitPoints;
    public int $ammo;

    // Constructor
    public function __construct($ammo = 100,
                                $fuel = 100,
                                $hitPoints = 100,
                                $isAlive = true)
    {
        $this->ammo = $ammo;
        $this->fuel = $fuel;
        $this->hitPoints = $hitPoints;
        $this->isAlive = true;
    }
    // Methods | functions

    // Shoot
        public function Shoot() : int{
            $shot = 5;
            $damage = 10;
            if ($this->ammo - $shot >= 0){
                    $this->ammo -= $shot;
                    return ($shot * $damage);
                }else {
                    return 0;
                }
            }
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

}