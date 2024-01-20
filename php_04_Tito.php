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
    parent::__construct($nameContinent);
    $this->nameCountry = $nameCountry;
  }
}
class Region extends Country
{
  public $nameRegion;
  public function __construct($nameContinent, $nameCountry, $nameRegion)
  {
    parent::__construct($nameContinent, $nameCountry);
    $this->nameRegion = $nameRegion;
  }
}
class Province extends Region
{
  public $nameProvince;
  public function __construct($nameContinent, $nameCountry, $nameRegion, $nameProvince)
  {
    parent::__construct($nameContinent, $nameCountry, $nameRegion);
    $this->nameProvince = $nameProvince;
  }
}
class City extends Province
{
  public $nameCity;
  public function __construct($nameContinent, $nameCountry, $nameRegion, $nameProvince, $nameCity)
  {
    parent::__construct($nameContinent, $nameCountry, $nameRegion, $nameProvince);
    $this->nameCity = $nameCity;
  }
}
class Street extends City
{
  public $nameStreet;
  public function __construct($nameContinent, $nameCountry, $nameRegion, $nameProvince, $nameCity, $nameStreet)
  {
    parent::__construct($nameContinent, $nameCountry, $nameRegion, $nameProvince, $nameCity);
    $this->nameStreet = $nameStreet;
  }
  public function getMyCurrentLocation($nameContinent, $nameCountry, $nameRegion, $nameProvince, $nameCity, $nameStreet)
  {
    echo "Mi trovo in" . " " . $nameContinent . "," . $nameCountry . "," . $nameRegion . "," . $nameProvince . "," . $nameCity . "," . $nameStreet;
  }
}

/* $mylocation = new Street("Europa", "Italia", "Puglia", "Ba", "Bari", "Strada San Giorgio Martire 2D");
$mylocation->getMyCurrentLocation("Europa", "Italia", "Puglia", "Ba", "Bari", "Strada San Giorgio Martire 2D"); */

// Traccia 2

class Vertebrate
{
public function __construct(){
   echo $this->stampaVertebrato();
}
protected function stampaVertebrato(){
  return "Sono un animale Vertebrato \n";
}
}

class WarmBlooded extends Vertebrate{

  public function __construct(){
    parent::__construct();
     echo $this->getWarmBlooded();
  }
 
  protected function getWarmBlooded(){
    return "Sono un animale a Sangue Caldo \n";
  }

}

class Mammal extends WarmBlooded{

  public function __construct(){
    parent::__construct();
     echo $this->animalCall();
  }
 
  protected function animalCall(){
    return "Aargh!! \n";
  }

}

class ColdBlooded extends Vertebrate{

  public function __construct(){
    parent::__construct();
    $this->getColdBlooded();
  }
 
  protected function getColdBlooded(){
    echo "Sono un animale a Sangue Freddo \n";
  }

}

class Rettil extends ColdBlooded{

  public function __construct(){
    parent::__construct();
     echo $this->animalCall();
  }
 
  protected function animalCall(){
    return "Ssssh!! \n";
  }

}

$animale = new Rettil();