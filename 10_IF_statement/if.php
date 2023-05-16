<?php
 
 $a = 5;
 $b = 5;



if ($a = $b){
echo "<p>$a je jednako $b</p>";

}
if ($a != $b){
  echo "<p>$a je razlicit od $b</p>";
}

if($a <= $b){
  echo "<p>$a je manje ili jednako od $b</p>";
}

echo "<p> Nastavljam dalje </p>";

$br1 = 3;
$br2 = "3";

if ($br1 == $br2)
{
  echo "<p>$br1 je jednako po vrednosti sa $br2</p>";
}

if ($br1 === $br2)
{
  echo "<p>$br1 je jednako po vrednosti i tipu sa $br2</p>";
}


// if else

$a = 3;
$b = 5;

if ($a > $b)
{
  echo "<p>$a je veće od $b</p>";
}
else
{
  echo "<p>$a je manje od $b</p>";
}

echo "Nastavljamo ponovo dalje";










?>