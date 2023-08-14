<?php

$student = [
   ["naziv" => "Matematika" , "datum" => "2022/05/08", "ocena" => 7],
   ["naziv" => "Engleski" , "datum" => "2022/03/02", "ocena" => 10],
   ["naziv" => "Baze podataka" , "datum" => "2022/10/25", "ocena" => 9],
   ["naziv" => "Web dizajn" , "datum" => "2022/06/10", "ocena" => 8],
   ["naziv" => "Marketing" , "datum" => "2022/11/08", "ocena" => 10],
];

//max ocena

$maxOcena = $student[0]['ocena'];

for($i=0; $i<count($student);$i++) {
   if($student[$i]['ocena']>$maxOcena){
      $maxOcena=$student[$i]['ocena'];
   }
} echo $maxOcena;

// Student je kandidat za studenta generacije ako je na ispitima dobijao samo devetke i desetke, i pri tome broj desetki nije manji od broja devetki. Napisati funkciju koja vraća da li je student kandidat za studenta generacije ili ne.

function studentGeneracije ($ocena){
   $brojdevet=0;
   $brojdeset=0;
   for($i=0; $i<count($student);$i++){
      if($student[$i]['ocena']<9){
        return false;
      } else{
          if($student[$i]>=9){
            $brojdevet++;
          } else{
            $brojdeset++;
          }
      }
   }
}  studentGeneracije($ocena);

// Takođe, napisati i sledeće funkcije, za koje se kao parametar prenosi niz položenih ispita.



// Napisati funkciju kojoj se prosleđuje i godina kao dodatni parametar, a koja ispisuje predmete koje je polagao date godine.

function predmeti($godina, $predmeti, $nizPolIsp){
  
  for($i=0; $i<count($student);$i++){
      if($student[$i]['datum']['YYYY']=='2022'){
        $predmeti= $naziv[$i];
      }
  }
  return $predmeti;
} echo predmeti($godina,$predmeti,$nizPolIsp);


// Napisati funkciju kojoj se prosleđuje i godina kao dodatni parametar, a koja vraća prosečnu ocenu studenta na ispitima koje je polagao date godine. 

//return prosecna ocena na ispitima 2022     - zbir ocena/count niz
//student 2022 god


function prosecnaOcena($godina,$ocena){
  $sum=0;
  for($i=0; $i<count($student);$i++){
    if($student[$i]['datum']['YYYY']=='2022'){

       $sum+= $student[$i]['ocena'];


  }
   return $prosek=$sum/count($student);
}
} echo prosecnaOcena($godina,$ocena);







?>