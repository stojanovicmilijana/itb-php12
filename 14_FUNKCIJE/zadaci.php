<?php
//Zadatak 1
// Napisati funkciju neparan koja za uneti ceo broj n vraća tačno ukoliko je neparan ili netačno ukoliko nije neparan.
// Pozvati funkciju i testirati njen rad.

function neparan ($broj)
{
 // echo "<p>Pocetak</p>";
  $rez=true;
  if($broj%2==0)
  {
      $rez=false;
      
  }
  //echo "<p>Kraj</p>";
  return $rez;
}
  // else
  // {
  //     return true; ///return napusta funkciju 
  // }
  // echo "<p>Kraj</p>"; /// ovo se ne ispisuje jer postoji return pre


$a=15;
if(neparan($a)){
  echo "<p>Broj je neparan</p>";
}else{
  echo "<p>Broj je paran</p>";
}


//Zadatak 2
// Napisati funkciju maks2 koja vraća veći od dva prosleđena realna broja. Zatim napisati funkciju maks4 koja vraća najveći od četiri realna broja.
// Pozvati funkcije i testirati njihov rad.

function maks2($a, $b){
  if($a>$b){
    return $a;
  } else{
    return $b;
  }
}

$broj1=15;
$broj2=45;
$veci=maks2($broj1, $broj2); //$maks=maks2(88,54);
echo "<p>Veći od brojeva $broj1 i $broj2 je: $veci</p>";


function maks4($a, $b, $c, $d){
  //1 nacin
  // $maksAB=maks2($a, $b);
  // $maksCD=maks2($c, $d);
  // $maks=maks2($maksAB, $maksCD);

  // return $maks;

   //2nacin
   return maks2(maks2($a,$b), maks2($c, $d));
}
$b1=10;
$b2=25;
$b3=0;
$b4=10;
$r=maks4($b1,$b2,$b3,$b4);
echo "<p>Maksimalni od brojeva $b1, $b2, $b3, $b4 je: $r </p>";
////////////////////////////////////////////////////////////////////

function kub($a)
{
  return $a*$a*$a;
}

$broj=10;
$rez=kub($broj);
echo "<p>$rez</p>";
/////////////////////////////////////////////////////

function uvecaj(&$a, $korak=10)
{
  $a=$a+$korak;
}

$broj=15;
uvecaj($broj);
echo "<p>$broj</p>";

///////////////////////////////////////////////////////

function uvecaj2(&$a, $korak=10)
{
  return $a+$korak;
}

$broj=15;
$broj=uvecaj2($broj);
echo "<p>$broj</p>";
/////////////////////////////////////////////////////////
//primer al
function proba($a=1, $b=3, $c=10){ //$a=null
  return $a+$b+$c;     ///// if(is_null($a) $a=1) 
}
echo proba(1,33);

echo "<hr>";
//Zadatak 3
// Napisati funkciju slika kojoj se prosleđuje url adresa slike, a funkcija prikazuje sliku za prosleđenu adresu slike.
// Pozvati funkciju i testirati je za različite url adrese.

function slika($url){
    echo "<img src='$url'>";
}

slika ("malicvet.jpg");

echo "<hr>";
////////////////////////////////////////////////////////////////////
//Zadatak 4
// Napraviti funkciju obojenaRec kojoj se prosleđuje boja na engleskom jeziku i prosleđuje se proizvoljna reč.
//  Prosleđenu reč ispisati u paragarfu bojom koja je prosleđena. Pozvati funkciju i testirati je.

function obojenaRec ($boja, $tekst){
  echo "<p style='color: $boja'> $tekst</p>";
}
obojenaRec('red', "Ovo je tekst crvene boje");
obojenaRec("blue", "Ovo je tekst PLAVE boje");
///////////////////////////////////////////////////////////////////////////
//Zadatak 5
// Napraviti funkciju recenica1 koja pet puta ispisuje istu rečenicu u paragrafu, a veličina fonta rečenice treba da bude jednaka vrednosti iteratora (sami odredite startnu vrednost iteratora i za koliki korak ćete iterator povećavati). Testirati funkciju

function recenica1(){
  for($i=10; $i<=35; $i+=5){  //////$i<=(10+5*5)
      echo "<p style='font-size:${i} px'>Recenica</p>";
  }
}
recenica1();
/////////////////////////////////////////////////
//Zadatak 6
// Napraviti funkciju recenica2 kojoj se prosleđuje veličina fonta a ona u paragrafu ispisuje proizvoljnu rečenicu. Pozvati funkciju pet puta za različite prosleđene vrednosti. Testirati funkciju.

function recenica2($velicinaFonta){
  echo "<p style='font-size: $velicinaFonta'>Neki tekst</p>";

}

//for
recenica2("20px");
recenica2("30px");
///////////////////////////////////////////////////////////////////
//Zadatak 7
// Napraviti funkciju aritmeticka koja vraća aritmetičku sredinu brojeva  od n do m. 
// Brojeve n i m proslediti kao parametre funkciji. Testirati funkciju.

function arsr($n, $m)
{
  $zbir = 0;
  if($n <= $m){
  for($i=$n; $i <= $m; $i++){
    $zbir += $i;
  }
  return $zbir / ($m - $n +1);
}else{
  return "<p>Uneli ste neispravne parametre</p>";
}
}
echo arsr(4,6);
echo "<hr>";
////////////////////////////////////////////////////////////////////
//Zadatak 8
//Napisati funkciju aritmetickaCifre koja vraća aritmetičku sredinu brojeva kojima je poslednja cifra 3 u intervalu od n do m.
//Brojeve n i m proslediti kao parametre funkciji. Testirati funkciju.

function aritmetickaCifre ($n, $m){
  $zbir=0;
  $nBroj=0;
   for($i=$n; $i<=$m; $i++){
        if($i%10==3){
          $zbir +=$i;
          $nBroj++;
        }
   }
   if($nBroj){   //if($nBroj !=0) if($nBroj>0)
    return $zbir/$nBroj;
   }else{                     /////////// moze i bez else
    return "<p>U opsegu nema brojeva koji zadovoljavaju uslov</p>";
   }
}
echo aritmetickaCifre(5,10);

$a=45;
$b=150;
echo aritmetickaCifre($a, $b);
echo "<hr>";

//Zadatak 9
// Dobili ste plaćenu programersku praksu u trajanju od n meseci. Prvog meseca, plata će biti a dinara. Ako budete vredno radili, svakog narednog meseca ćete dobiti povišicu od d dinara. Brojeve n, a i d određujete sami.
// Napišite funkciju praksa kojoj se prosleđuju brojevi n i a i d. Funkcija treba da vrati vrednost koliko ćete ukupno navca zaraditi, ukoliko svakog meseca budete dobijali povišicu.
// Testirati zadatak (pozvati funkciju i ispisati vrednost koju ona vraća).



function praksa ($n, $a, $d){
    $ukupno = $a;
    for($i=2; $i<=$n; $i++){
        $ukupno += $a + $d; //$ukupno = $a + ($n-1) * ($a + $d);
    }
    return $ukupno;

}

function praksa2($n, $a, $d){
  $ukupno = 0;
    for($i=1; $i<=$n; $i++){
      $ukupno += $a + $d;
    }
   return $ukupno - $d; // ukupno = $n * ($a+$d) - $d;

}


$n=10;
$a=1000;
$d=120;

echo praksa($n, $a, $d);


//Zadatak 10
// Napraviti niz celih brojeva. 
// Ispisati sve neparne brojeve ovog niza koristeći funkciju neparan iz 1. zadatka.
// Pozvati funkciju i testirati je.

$niz=[81,-47,5,2,0,10,-15];
//for($i=0; $i<=count($niz)-1;$i++)
for($i=0; $i<=count($niz)-1;$i++){
 if(neparan($niz[$i])){
  echo "<p>".$niz[$i]."</p>";
 }
}

foreach($niz as $v){
  if(neparan($v)){
    echo "<p>". $v ."</p>";
  }
}

//Zadatak 11
// //Napraviti funkciju brojNeparnih kojoj se kao parametar prosleđuje niz celih brojeva, a funkcija prebrojava i vraća koliko neparnih brojeva ima prosleđeni niz.
// Pozvati funkciju i testirati je.

function brojNeparnih ($arr){
  $brojNeparnih=0;
  for($i=0; $i<count($arr); $i++){
    if(neparan($arr[$i])){
      $brojNeparnih++;
    }
    return $brojNeparnih;
  }
}

echo "<p>Broj neparnih u nizu je:".brojNeparnih($niz)."</p>";

//Zadatak 12
// U jednom gradu je od ponedeljka do petka, tačno u podne, merena temperatura vazduha. Izmerene temperature su zapisane u obliku asocijativnog niza datum/temperatura. Osmisliti funkciju (ili više njih) koja će na ekranu plavom bojom ispisati dan, datum i temperaturu kada je temperatura bila najniža, a crvenom bojom ispisati dan, datum i temperaturu kada je temperatura bila najviša. 
// Testirati implementirani kod.

function najnizaTemp($arr){
  $minTemp=100;
  $minDatum="";
  $minDan=0;
  $dan=1;
  foreach($arr as $datum=>$temp){
    if($minTemp>$temp){
        $minTemp=$temp;
        $minDatum=$datum;

    }
    $dan++;

  }
  $dani=['Ponedeljak', 'Utorak', 'Sreda', 'Cetvrtak', 'Petak'];
  echo "<p style='color: blue'>".$dani[$minDan-1]." ".$minDatum."sa temp ".$minTemp."</p>";

}


$niz=['01.05.2023'=>19,
      '02.05.2023'=>22,
      '03.05.2023'=>18,
      '04.05.2023'=>15,
      '05.05.2023'=>25

]






?>