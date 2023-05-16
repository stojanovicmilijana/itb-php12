<?php

$pol = '2';
$godine = 24;

if ( $pol == 'm')
{
    if ($godine >= 18)
    {
      echo "<p>Musko, punoletno</p>";
    }
    else
    {
      echo "<p>Musko, maloletno</p>";
    }

}
else
{
 if ($godine >= 18)
 {
  echo "<p>Zensko punoletno</p>";
 }
 else
 {
    echo "<p>Zensko maloletno</p>";
 }
}

if ($pol == 'm' && $godine >= 18)
{
  echo "<p>Musko, punoletno</p>";
}
// firma radi od 9 do 17h.

$sati = date ('H');
if ($sati < 9 && $sati >=17)
{
  echo "<p>Firma ne radi</p>";
}
else{
  echo "<p>Firma radi</p>";
}

//Alternativno
if ($sato >=9 && $sati < 17)
{
  echo "<p>Firma radi</p>";
}

else{
  echo "<p>Firma ne radi</p>";

}


//zadatak 13
$n = 13;
if (!($n % 2 == 0))
{
  echo "<p> $n je neparan</p>";
}
else
{
  echo "<p> $n je paran</p>";
}




?>