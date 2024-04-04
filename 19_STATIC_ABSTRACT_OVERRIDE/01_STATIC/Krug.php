<?php
class Krug{

  protected $r;
  const PI = 3.14;
  private static $pi = self::PI;
  private static $brojDecimala = 2;
  private static $brojKrugova = 0;


  public static function getBrojKrugova(){
    return self::$brojKrugova;
  }

  
  public function __construct($r){
    self::$brojKrugova++;
    $this->setR($r);
  }

  public function getR(){
    return $this->r;
  }

  public function setR($r){

    if($r >= 0){
      $this->r =$r;
    }else{
      $this->r=0;
    }
  }
public function obimKruga(){

  return round(2 * $this->r * self::$pi,self::$brojDecimala);
}

public function povrsinaKruga(){
  return round(($this->getR()**2)* self::$pi,self::$brojDecimala);
}

public static function setPI($vr){

  self::$pi =$vr;

}

public static function getPI(){
  return self::$pi;
}

public static function setBrojDecimala($br){
  self::$brojDecimala= $br;
}
public static function getBrojDecimala(){

     return self::$brojDecimala;
}



}




?>