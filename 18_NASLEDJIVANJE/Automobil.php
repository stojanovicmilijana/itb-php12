<?php
require_once "Vozilo.php";

class Automobil extends Vozilo{

  //Klasa automobil nasledjuje sva polja i metode iz klase vozilo
  //ali moze diretktno da pristupa samo public poljima i metodama iz klase Vozilo
  //a ona polja i metode iz klase Vozilo koja su private, ona se nasledjuju
  //ali ne moze direktno da se pristupi njima(jer nismo u klasi vozilo)
  public function voziAutomobil()
  {
     echo "<p>Automobil $this->tip ($this->boja) u pokretu</p>";

      //echo "<p>Automobil". $this->getTip()."(". $this->getBoja().") u pokretu</p>";


  }

}





?>