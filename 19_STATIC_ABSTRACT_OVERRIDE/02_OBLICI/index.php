<?php



require_once "Trougao.php";
require_once "Pravougaonik.php";
require_once "Kvadrat.php";


//$t->setA(6);
$t = new Trougao(3,4,5);

$t->setA(60);//kada pozivamo bilo koju drugu metodu koja nije konstruktor,
//OBJEKAT JE VEĆ KREIRAN! Već postoje sva polja za taj objekat

// $t->uslovZaTrougao(3,4,5);


echo "<p>".$t->obimTrougla().",".$t->povrsinaTrougla()."</p>";

$p = new Pravougaonik(5,9);
echo "<p>".$p->obimPravougaonika().",".$p->povrsinaPravougaonika()."</p>";



$k = new Kvadrat(3);
echo "<p>".$k->obimKvadrata().",".$k->povrsinaKvadrata()."</p>";




$oblici = [$t, $p, $k];
foreach ($oblici as $oblik)
{
  echo "<p>".$k->obimKvadrata().",".$k->povrsinaKvadrata()."</p>";
}


?>