<?php


require_once "Vozilo.php";


class Autombil extends Vozilo{

  private $brojVrata;

  public function __construct($j,$z,$p,$bv){
   //1- pozovi konstuktor iz klase Vozilo da postavi polja iz te klase
   parent:: __construct($j,$z,$p);
  //2- postavi polja specificna za ovu klasu
   $this->brojVrata=$bv;
  }




  public function ispisAuto(){

    $this->ispis();//mozemo da pozovemo metodu iz osnovne klase i na taj nacin pristupimo
 
    echo "<p>Automobil: ". $this->javnoPolje. " ". $this->zasticenoPolje." "//.$this->privatnoPolje
    ." ". $this->brojVrata."</p>";

  }

}



?>