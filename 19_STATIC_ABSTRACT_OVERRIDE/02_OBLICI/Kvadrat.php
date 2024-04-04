<?php

class Kvadrat {
 private $a;


 public function getA(){

  return $this->a=$a;

 }

 public function setA($a){
    if($a>0)
    {

    $this->a=$a;
    }

    else{
      $this->a=0;
    }

 }
 public function obimKvadrata(){

  return 4* $this->a;

 }

 public function površinaKvadrata(){
   return $this->a * $this->a;
 }


}






?>