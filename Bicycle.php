<?php


  // Bicycle.php


  class Bicycle

  {

    public string $color;
    public int $currentSpeed;
    public int $nbSeats = 1;
    public int $nbWheels = 2;

    
    public function __construct(string $color ="blue", int $nbSeats = 5, string $energy = "gasoline")
    {
    $this->color = $color;
    $this->nBseats = $nbSeats;
    $this->energy = $energy;
    }


    public function forward(): string
    {
      $this->currentSpeed = 5;
      return "Go !";
    }


    public function brake(): string
    {
      $sentence = "";
      while ($this->currentSpeed > 0) {
          $this->currentSpeed--;
          $sentence .= "Brake !!!";
      }

      $sentence .= "I'm stopped ! <br>";
      return $sentence;
    }

    public function start(): int
    {
      $startCar = 0;
      while ($this->currentSpeed > 0) {
          $this->currentSpeed++;
          $sentence .= "Let's go !!! <br>";
      }

      $sentence .= "I'm stopped ! <br>";
      return $sentence;
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