<?php
//zadatak 1 i 2

//Ispisati brojeve od 1 do 20. 


for($i=1 ; $i<=20; $i++){ //ukoliko zelimo svaki drugi mozemo za korekciju staviti i += 2 (nije dozv napisati i+2!)
  echo "$i";
}
echo "<hr>";

//Ispisati brojeve od 20 do 1.

for ($i=20; $i>=1; $i--){
  echo "$i";
}

echo "<hr>";

//zadatak 3

//Ispisati parne brojeve od 1 do 20. *

for($i=2; $i<=20; $i+=2){
   echo "$i ";
}
echo "<hr>";
//zadatak 4
//Ispisati dvostruku vrednost brojeva  od 5 do 15. *

for($i=5; $i<=15;$i++){
  $p=$i * $i;
  echo"$p";  //echo $i*2  .  " ";
}

echo "<hr>";

//zadatak 5

// Odrediti sumu brojeva od 1 do 100. 
$suma=0;

for($i=1; $i<=100; $i++){
  $suma += $i;
  
}
echo "<p>Suma brojeva od 1 do 100 je: $suma</p>";
echo "<hr>";

// zadatak 6
//Odrediti sumu brojeva od 1 do $n



//zadatak 7
//Odrediti sumu brojeva od $n do $m.


//zadatak 8
//Odrediti proizvod brojeva od $n do $m. 


//zadatak 9
//Odrediti sumu kvadrata brojeva od n do m *

//zadatak 10
//Preuzeti sa interneta tri slike i imenovati ih 1, 2 i 3. For petljom prikazati naizmenično te tri slike $n puta 
//(na ekranu treba biti ukupno $n sličica). *
/*
1%3 = 1
2%3 = 2 -> 2.jpg
3%3 = 0 -> 3.jpg
$4%3 = 1 -> 1.jpg
$5%3 = 2 -> 2.jpg
*/

// 1.način

$n = 7;
for($i=1; $i<=$n;$i++){
    if($i%3 == 1){
      echo "<img src='slike/1.jpg'>";
    }
    elseif($i%3 == 2){
      echo "<img src='slike/2.jpg'>";
    }

    else {
      echo "<img src='slike/3.jpg'>";
    }
}

//2.način

//3.način
//da je zadatak glasio da treba n puta da ispišete slike 1.jpg, 2.jpg i 3.jpg //
echo "<hr>";
$n=4;
for($i=1; $i<=$n; $i++){
  for($j=1; $j<=3; $j++){
    echo "<img src='slike/$j.jpg'>";
  }
}
echo "<hr>";
echo "<hr>";
echo "<hr>";
//zadatak 11
//Sabrati sve brojeve deljive sa 9 u intervalu od 1 do 30. *
$sum=0;

for($i=1;$i<=30;$i++){
  if($i%9 == 0){
    $sum += $i;
  }
} echo "$sum";

echo "<hr>";
echo "<hr>";
//Zadatak 12
//Odrediti proizvod svih brojeva deljivih sa 11 u intervalu od 20 do 100. *
$p = 1;

for($i=20;$i<=100;$i++){

  if($i%11==0){

    $p *= $i;

  }
} echo "$p";

echo "<hr>";
//zadatak 13
//Prebrojati koliko ima brojeva deljivih sa 13 u intervalu od 5 do 150. *
   $brojac = 0;

 for($i=5;$i<=150;$i++){


    if($i%13 == 0){
     $brojac += 1;
   } 
  } echo "$brojac";

//zadatak 14
//Ispisati aritmetičku sredinu brojeva od $n do $m.
$n=5;
$m=9;
$zbir=0;
$br=0;
for($i=5;$i<=9;$i++){
$zbir += $i;//$zbir =$zbir + $i;
$br++; //$br += 1; //$br = $br + 1;
}
echo "<p>Zbir brojeva od $n do $m je zbir, dok je broj brojeva $br</p>";
$arsr = $zbir / $br;
echo "<p>Aritemticka sredina je $arsr</p>";



//zadatak 15
//Prebrojati koliko brojeva od $n do $m je pozitivno, a koliko njih je negativno. *
//ZADATAK 15.
   //Prebrojati koliko brojeva od $n do $m je pozitivno, a koliko njih je negativno.
   $n = -15;
   $m = 25;
   $pozitivni = 0;
   $negativni = 0;
   for($i = $n; $i <= $m; $i++){
    if($i < 0){
        $negativni++;
    }
    else{
        $pozitivni++;
    }
   }
   echo "<p>od $n do $m pozitivnih ima $pozitivni, a negativnih $negativni</p>";
   echo "<hr>";

//ZADATAK 16.
   //Prebrojati koliko je brojeva od 5 do 50 koji su deljivi sa 3 ili sa 5.
   $brojac = 0;
   for($i = 5; $i <= 50; $i++){
    if($i%3 == 0 || $i % 5 == 0){
        $brojac++;
    }
   }
   echo "<p>Od 5 do 50 broj brojeva koji je deljiv sa 3/5 je: $brojac</p>";
   echo "<hr>";
   //Zadatak 16
   //Prebrojati i izračunati sumu brojeva od n do m kojima je poslednja cifra 4 i parni su. *
   
    
 ////////////////////////////////////////////////////
   //Zadatak 18
   //Ispisati brojeve od $n do $m, koji su deljivi sa $a.
    $n = 14;
    $m = 32;
    $a = 5;
    for($i=$n; $i<=$m; $i++){
        if($i%$a == 0){
            echo "$i";
        }
    }
    // 2.način
  $start = ceil($n/$a)*$a; //ceil(14/5)*5 =3*5=15
  $end = floor($m/$a) * $a; //floor (32/5)*5 = 6*5= 30
  for($i=$start; $i<=$end; $i+=$a){
    echo "$i";
  }

///////////////////////////////////////////////

//Zadatak 21
//Odrediti proizvod brojeva od $n do $m koji su deljivi brojem $a, a nisu brojem $b.

$n = 14;
$m = 32;
$a = 5;
$b = 10;
for ($i = $n; $i <= $m; $i++){
  //   if($i % $a == 0 && $i % $b > 0)
  //   if($i % $a == 0 && !($i % $b == 0))
  if($i % $a == 0 && $i % $b !=0){
    $p *= $i; //$p = $p * $i;
  }
}
echo "<p>$p</p>"; // 15 i 20 , 15*25=375
/////////////////////////////////////////////
//2.način

$start = ceil($n/$a)*$a; //ceil(14/5)*5 =3*5=15
$end = floor($m/$a) * $a; //floor (32/5)*5 = 6*5= 30
for($i=$start; $i<=$end; $i+=$a){
  if($i % $b == 0){
    countinue; //Kada dodje do ove linije izvršava što je unutar petlje, već nastavlja naredni
  }
  $p *= $i; //$p= $p * $i;
}






?>