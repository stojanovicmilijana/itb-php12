<?php
function mojaFunkcija()
{
  echo "<p>Moja funkcija</p>";
}


mojaFunkcija();
mojaFunkcija();
mojaFunkcija();
mojaFunkcija();

function mojaFunkcija2($tekst){
  $b="nova promenljiva";
  global $c;
  echo "<p>F-ja sa parametrom: $tekst</p>";
}

mojaFunkcija2("1.način");
$a="2.način";
mojaFunkcija2($a);
$c="globalni";

// echo $b; - ovo ne može
$b= "van f-je"; ///////// globalna prom
mojaFunkcija2($a);
echo $b;

function ispisImena ($ime, $prezime){
    echo "<p>Ime i prezime je: $ime $prezime</p>";
}

ispisImena("Petar", "Petrovic");
$i="Lazar";
$p="Lazic";
ispisImena($p, $i);



//  function ispisImena2($ime, $prezime=null, $godine) /////neobavezan parametar def kada kazemo = null
//  {
//  echo "<p>Ime je: $ime";
//  }
//  if ($prezime)
//  {

//   echo " a prezime je: $prezime";

//  }
// echo " ima godina $godine";
// echo "</p>";


// ispisImena1("Mika", null, 25);
// ispisImena2("Mika", "Mikić", 28);

/**
//  * funkcija koja sabira dva broja
//  * @param int $a - prvi parametar broj
//  * @param int $b - drugi parametar broj
//  * 
//  * @return [int] - zbir dva broja / suma dobijena broja
//  */
 function zbir(int $a, int $b){
  $c = $a + $b;
  echo "<p>$c</p>";
  return $c;
 }

 $pom = zbir(3, 8);
 echo "<p>$pom</p>";
 echo zbir(3, "10");
//  zbir(3, "a"); - //ovo nije moguce
 echo "<hr>";
 echo zbir(zbir(3,5), 10);

 $a= zbir(4,9);
 $b= zbir(5,10);
 $c= zbir($a, $b);
 echo "<hr>";
 echo $c;

 echo "<hr>";
 echo zbir(zbir(4, "9"), zbir (5,10));

// inlcude();
// require();


//Zadatak 1















?>