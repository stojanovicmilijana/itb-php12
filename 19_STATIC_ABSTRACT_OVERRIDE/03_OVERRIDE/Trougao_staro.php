<?php

class Trougao{


  private $a;
  private $b;
  private $c;

public function __construct($a,$b, $c){

  if($a>0 && $b>0 && $c>0 && $a + $b > $c && $b + $c > $a){
    $this->a= $a;
    $this->b= $b;
    $this->c= $c;
  }
  else{
    $this->a=0;
    $this->b=0;
    $this->c=0;
  }


}
  public function setA($a){

    if($a>0 && $a+ $this->b > $this->c && $this->b + $this->c > $a && $a + $this->c > $this->b){

      $this->a = $a;


    }
    else{
      "<p>Ne moze da se PROMENI vrednost stranice a</p>";
    }
  }

  public function setb($b){

    if($b>0 && $b+ $this->a > $this->c && $this->c + $this->a > $b && $b + $this->c > $this->a){

      $this->b = $b;


    }
    else{
      // $this->b= 0;
      "<p>Ne moze da se PROMENI vrednost stranice b</p>";
    }
  }

  public function setc($c){

    if($c>0 && $this->b+ $this->a > $c && $this->b + $c > $this->a  && $this->a + $c > $this->b){

      $this->c = $c;


    }
    else{
      "<p>Ne moze da se PROMENI vrednost stranice c</p>";
    }
  }




}


?>