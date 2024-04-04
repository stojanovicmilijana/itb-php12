<?php

class Trougao{


  private $a;
  private $b;
  private $c;

  private static function uslovZaTrougao($a, $b, $c){

  return ($a>0 && $b>0 && $c>0 && $a + $b > $c && $b + $c > $a);

  }

public function __construct($a,$b, $c){

  if(self::uslovZaTrougao($a, $b, $c)){
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

    if(self::uslovZaTrougao($a, $this->b, $this-c)){

      $this->a = $a;


    }
    else{
      "<p>Ne moze da se PROMENI vrednost stranice a</p>";
    }
  }

  public function setb($b){

    if(self::uslovZaTrougao($b, $this->a, $this-c)){

      $this->b = $b;


    }
    else{
      // $this->b= 0;
      "<p>Ne moze da se PROMENI vrednost stranice b</p>";
    }
  }

  public function setc($c){

    if(self::uslovZaTrougao($c, $this->a, $this->b)){

      $this->c = $c;


    }
    else{
      "<p>Ne moze da se PROMENI vrednost stranice c</p>";
    }
  }




}


?>