<?php
// apstraknta klasa je klasa koja ima bar jednu apstraktnu metodu
//to za posledicu ima da ne mozemo da kreiramo objekte ove klase


abstract class Oblik {

  private $nazivOblika;

  const KVADRAT = "Kvadrat";
  const PRAVOUGAONIK = "Pravougaonik";
  const TROUGAO = "Trougao";
  const ROMB = "Romb";

  public function __construct($n){
      $this->nazivOblika=$n;
  }

  public abstract function obim();
  //ako neka klasa sadrzi apstraktnu metodu to znaci:
  // 1) nema implementacije te metode u toj klasi
  // 2) izvedene implementacije MORAJU da ponude implem.(varijantu) te metode

  public abstract function povrsina();

  public function ispis(){

    echo "<p>$this->nazivOblika: " .$this->obim() .",".$this->povrsina()."</p>";

   }


}




?>