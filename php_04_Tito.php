<?php
// Traccia 1
class Continent
{
  public $nameContinent;
  public function __construct($nameContinent)
  {
    $this->nameContinent = $nameContinent;
  }
}
class Country extends Continent
{
  public $nameCountry;
  public function __construct($nameContinent, $nameCountry)
  {
    parent::__construct($nameContinent, $nameCountry);
    $this->nameCountry = $nameCountry;
  }
}
class Region extends Country
{
  public $nameRegion;
  public function __construct($nameContinent, $nameCountry, $nameRegion)
  {
    parent::__construct($nameContinent, $nameCountry, $nameRegion);
    $this->nameRegion = $nameRegion;
  }
}
class Province extends Region
{
  public $nameProvince;
  public function __construct($nameContinent, $nameCountry, $nameRegion, $nameProvince)
  {
    parent::__construct($nameContinent, $nameCountry, $nameRegion, $nameProvince);
    $this->nameProvince = $nameProvince;
  }
}
class City extends Province
{
  public $nameCity;
  public function __construct($nameContinent, $nameCountry, $nameRegion, $nameProvince, $nameCity)
  {
    parent::__construct($nameContinent, $nameCountry, $nameRegion, $nameProvince, $nameCity);
    $this->nameCity = $nameCity;
  }
}
class Street extends City
{
  public $nameStreet;
  public function __construct($nameContinent, $nameCountry, $nameRegion, $nameProvince, $nameCity, $nameStreet)
  {
    parent::__construct($nameContinent, $nameCountry, $nameRegion, $nameProvince, $nameCity, $nameStreet);
    $this->nameStreet = $nameStreet;
  }
  public function getMyCurrentLocation($nameContinent, $nameCountry, $nameRegion, $nameProvince, $nameCity, $nameStreet)
  {
    echo "Mi trovo in" . " " . $nameContinent . "," . $nameCountry . "," . $nameRegion . "," . $nameProvince . "," . $nameCity . "," . $nameStreet;
  }
}

// $mylocation = new Street("Europa", "Italia", "Puglia", "Ba", "Bari", "Strada San Giorgio Martire 2D");
// $mylocation->getMyCurrentLocation("Europa", "Italia", "Puglia", "Ba", "Bari", "Strada San Giorgio Martire 2D");

// Traccia 2

abstract class Animals
{
  public $category;
 
  public function __construct($category)
  {
    echo "Sono un animale" ." " .$category."\n";
  }
}

class WarmBlooded extends Animals{
protected function species(){
  echo "Sono un animale a Sangue Caldo"."\n";
}
public function tellMeYourSpecies(){
  echo $this->species();
}
}

class Mammals extends WarmBlooded{
  protected function subspecies(){
    echo "Sono un mammifero"."\n";
  }
  public function tellMeYourSubSpecies(){
    echo $this->species()." ".$this->subspecies();
  }
}
class Bird extends WarmBlooded{
  protected function subspecies(){
    echo "Sono un uccello";
  }
  public function tellMeYourSubSpecies(){
    echo $this->species()." ".$this->subspecies();
  }
}

class ColdBlooded extends Animals{
  protected function species(){
    echo "Sono un animale a Sangue Freddo"."\n";
  }
  public function tellMeYourSpecies(){
    echo $this->species();
  }
  }
  class Reptiles extends ColdBlooded{
    protected function subspecies(){
      echo "Sono un rettile";
    }
    public function tellMeYourSubSpecies(){
      return $this->species()." ".$this->subspecies();
    }
  }
  class Amphibians extends ColdBlooded{
    protected function subspecies(){
      echo "Sono un anfibio";
    }
    public function tellMeYourSubSpecies(){
      return $this->species()." ".$this->subspecies();
    }
  }

$animal = new mammals("Vertebrato");
$animal ->tellMeYourSubSpecies();
$animal2 = new Reptiles("Vertebrato");
$animal2 ->tellMeYourSubSpecies();