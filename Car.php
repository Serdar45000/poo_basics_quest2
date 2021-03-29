<?php


  // Bicycle.php


  class Car

  {
    private int $nbWheels;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel;

    public function __construct(string $color ="blue", int $nbSeats = 5, string $energy = "gasoline")
    {
    $this->color = $color;
    $this->nBseats = $nbSeats;
    $this->energy = $energy;
    }


    public function forward(): string
    {
      $this->currentSpeed = 15;
      return "Go !";
    }


    public function brake(): string
    {
      $sentence = "";
      while ($this->currentSpeed > 0) {
          $this->currentSpeed--;
          $sentence .= "Brake !!!";
      }

      $sentence .= "I'm stopped !";
      return $sentence;
    }
    

    public function setColor(string $color): boid
    {
        $this->color = $color;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed(int $currentSpeed): void
    {
      if($currentSpeed >= 0) {
        $this->currentSpeed = $currentSpeed;
      }
    }


    public function getNbSeats(string $nbSeats): void
    {
        $this->nbSeats = $nbSeats;
    }

 
    public function getNbWheels(string $nbWheels): void
    {
        $this->nbWheels = $nbWheels;
    }


    public function dump()
    {
    var_dump($this);
    }

}