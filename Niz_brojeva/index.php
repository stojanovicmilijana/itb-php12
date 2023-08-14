<?php

$ocene= [5,6,7,8,9,10,5,6];

//2

function prosek($ocene){
   $sum=0;
  for($i=0;$i<count($ocene);$i++){
      $sum+=$ocene[$i];
      
  }
   return $sum/count($ocene);
}
  echo prosek($ocene);

//3 max ocena
echo "<hr>";
function maks($ocene){
  $max=0;
  for($i=0;$i<count($ocene);$i++){
      $trenutniE = $ocene[$i];
      if($trenutniE>$max){
        $max=$trenutniE;
      }
  }
  return $max;
} echo maks($ocene);
echo "<hr>";

// Napisati funkciju koja vraća broj predmeta na kojima je dobio maksimalnu ocenu u toku studija.
function BrojPredmeta($ocene) {
  $brojac=0;
  $max = maks($ocene);
  for ($i=0; $i <count($ocene) ; $i++) {
      if ($max == $ocene[$i]) {
          $brojac++;
      }
  }
  return $brojac;
}
echo "<br>";
echo BrojPredmeta($ocene);
echo "<hr>";


//Student je kandidat za studenta generacije ako je na ispitima dobijao samo devetke i desetke, i pri tome broj desetki nije manji od broja devetki. Napisati funkciju koja vraća da li je student kandidat za studenta generacije ili ne
$ocene= [5,6,7,8,9,10,10,5,6];

function studentGeneracije($ocene){
  $devet = 0;
  $deset = 0;
  for($i = 0; $i < count($ocene); $i++){
      if($ocene[$i] < 9){
          return false;
      }
      else{
          if($ocene[$i] == 9){
              $devet++;
          }
          else{
              $deset++;
          }
      }
  }
  if($deset > $devet){
      return true;
  }
  else{
      return false;
  }
}
if (studentGeneracije($ocene)) {
  echo "<br>kandidat za djaka generacije";
}
else {
  echo "<br>Nije";
}
echo "<hr>";

//  Napisati funkciju koja vraća maksimalnu dužinu podniza u kojoj je dobijao maksimalnu ocenu (ova dužina može biti jednaka 1). 
//  Na primer, za niz [10, 10, 9, 10, 10, 10, 8, 9, 9, 9, 9, 10, 10, 10], funckija treba da vrati 3.
//  Na primer, za niz [6, 8, 6, 6, 6, 7, 7, 9, 7, 7, 7, 7], funkcija treba da vrati 1.
$ocene= [5,6,7,8,9,10,10,5,6];


// function maxPodnizz($ocene){
//   $max = maks($ocene);
//   $br = 0;
//   $maxNiz = 0;
// for($i=0; $i<count($ocene);$i++){
//    if($ocene[$i] == $max)
//      { $br++;
//      if($br > $maxNiz)
//        { $maxNiz = $br;
//       } 
//     }
//    else{ $br=0;
//   }
   
//    return $maxNiz;
//    }
//   }
//   echo maxPodnizz($ocene);

       function maxPodniz($ocene){
     $maxOcena = maks($ocene);
    //$podniz=[];
    $n = 0;
   for($i = 0; $i < count($ocene); $i++){
       if($maxOcena == $ocene[$i]){
            $n++;
        }
        else{
            $podniz[]=$n;
            $n = 0;
         }
     }
    $maxPodniz = $podniz[0];
   for($i = 1; $i < count($podniz); $i++){
       if($maxPodniz < $podniz[$i]){
           $maxPodniz = $podniz[$i];
       }
     }
     return $maxPodniz;
  }
 echo maxPodniz($ocene);
  




?>