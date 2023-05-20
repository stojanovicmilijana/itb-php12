<?php

class Film {
  var $naslov;
  var $reziser;
  var $godinaIzdanja;
  function stampaj() {
    echo
    "
        <table>
            <tr>
                <td>Naslov filma: </td>
                <td>$this->naslov<//td>
            </tr>
            <tr>
                <td>Ime rezisera: </td>
                <td>$this->reziser<//td>
            </tr>
            <tr>
                <td>Godina izdanja: </td>
                <td>$this->godinaIzdanja<//td>
            </tr>
        </table>
    ";
  }
  
    // Geteri

public function getNaslov()
{
    return $this->naslov;
}
public function getReziser()
{
    return $this->reziser;
}

public function getGodinaIzdanja()
{
    return $this->godinaIzdanja;
}
// Seteri

public function setNaslov($n)
{
    $this->naslov = $n;
}

public function setReziser($r)
{
    $this->reziser = $r;
}

public function setGodinaIzdanja($g)
{
    if($g>1800)
    {
        $this->godinaIzdanja = $g;
    }
    elseif($g<=1800)
    {
        $this->godinaIzdanja = 1800;
    }
}
}
$f1 = new Film();
$f1->naslov = "Top Gun";
$f1->reziser="Joseph Kosinski";
$f1->godinaIzdanja=2022;

$f1 -> stampaj();

$f2 = new Film();
$f2->naslov="Forrest Gump";
$f2->reziser ="Robert Zemeckis";
$f2->godinaIzdanja=1994;

$f2->stampaj();

$f3= new Film();
$f3->naslov="The Shawshank Redemption";
$f3->reziser="Frank Darabont";
$f3->godinaIzdanja=1994;

$f3->stampaj();







?>