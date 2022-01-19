<?php

//shoot
//reload


class Fighter{
    // Properties
    public bool $isAlive;
    private int $fuel;
    public int $hitPoints;
    public int $ammo;
    public bool $reload;

    // Constructor
    public function __construct($ammo = 100,
                                $fuel = 100,
                                $hitPoints = 150,
                                $isAlive = true,
                                $reload = false)
    {
        $this->ammo = $ammo;
        $this->fuel = $fuel;
        $this->hitPoints = $hitPoints;
        $this->isAlive = true;
        $this->Reload = false;
    }
    // Methods | functions

    // Shoot
        public function Shoot() : int{
            $shot = 5;
            $damage = 3;
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
        $fuelUsage = 5;
        if($this->fuel - $fuelUsage > 0){
            $this->fuel -= $fuelUsage;
        } else{
            $this->fuel = 0;
        }
    }
    // Reload
    public function Reload(){
        if($this->ammo <= 0){
            $this->reload = true;
            $this->ammo = 100;
            echo 'Reloading! cover me!';
        } else{
            $this->reload = false;
        }
    }
    // Get | set
    public function Refuel($fuel){
        $this->fuel = $fuel;
    }

}