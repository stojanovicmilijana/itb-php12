<?php


class Knjiga {
 
  private $brojStrana;
  private $cena;
  private $imeAutora;


  public function __construct($br,$cena,$ime){
    $this->setBroj($br);
    $this->setCena($cena);
    $this->setIme($ime);

  }

  public function getBroj()
  {
      return $this->brojStrana;
  }

  public function getCena()
  {
      return $this->cena;
  }

  public function getIme()
  {
      return $this->ime;
  }

  public function setBroj($b)
        {
            $this->brojStrana = $b;
        }

        public function setCena($c)
        {
            $this->cena= $c;
        }
        public function setIme($i)
        {
            $this->cena= $i;
        }




public function stampa(){
   if($this->brojStrana == true){
     echo $this->brojStrana;
   } 
   if($this->cena == true){
      echo $this->cena;
   }

}
public function obimna(){
  if($this->brojStrana>600){
    return true;
  }else{
    return false;
  }

}
public function skupa(){
  if($this->cena>8000){
    return true;
  }else{
    return false;
  }
}
public function dugackoIme(){
  if(strlen($this->autor) > 18){

  }
}  //$autor = strlen($this->autor) - str_contains($this->autor, " ");

}

$knjiga = new Knjiga(700, 1500, "Paulo Koeljo");

$knjiga->stampa();
if($knjiga->obimna() == true) {
    echo "Knjiga je obimna";
} else {
    echo "Knjiga nije obimna";
}
echo "<hr>";

if($knjiga->skupa() == true) {
    echo "Ova knjiga je skupa";
} else {
    echo "Ova knjiga je jeftina";
}
echo "<hr>";

if($knjiga->dugackoime() == true) {
    echo "Ime i prezime autora je dugacno";
} else {
    echo "Ime i prezime ovog autora nije dugacko";
}











?>