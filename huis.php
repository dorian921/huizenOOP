
<?php

//maker: dorian volmer
//function make class and methods

class House {

  //properties
  public int $floor;
  public int $rooms;
  public float $width;
  public float $height;
  public float $depth;
  public float $volume;

  private float $pricePerM3 = 1500;

  
//Methods
   public function __construct($floor, $rooms, $width, $height, $depth )
   {
    $this->floor = $floor;
    $this->rooms = $rooms;
    $this->width = $width;
    $this->height = $height;
    $this->depth = $depth;
    $this->volume = $this->calculateVolume();
   
    
   
  
  
}
 function calculateVolume()
    {
      return $this->width * $this->height * $this->depth;

    }
   public function calculatePrice() 
    {
      return $this->volume * $this->pricePerM3;

    }
    function getFloor()
    {
      return $this->floor;
    }
    function getRoom() {
      return $this->rooms;
    }
    function getData() {
      echo "het volume van het huis:".$this->volume . " m3"; echo "<br>";
      echo "er zijn ".  $this->getFloor() . " verdiepingen"; echo "<br>";
      echo "dit huis heeft " . $this->getRoom() . " kamers"; echo "<br>";
      echo "het huis kost $" . number_format($this->calculatePrice()); echo "<br>";
    }

   
}





?>