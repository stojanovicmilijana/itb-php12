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
                <td>".$this->reziser."<//td>
            </tr>
            <tr>
                <td>Godina izdanja: </td>
                <td>$this->godinaIzdanja<//td>
            </tr>
        </table>
    ";
  }
}
$f1 = new Film();
$f1->naslov = 'Lajanje na zvezde';
$f1->reziser="Zdravko Sotra";
$f1->godinaIzdanja=1998;

$f1 -> stampaj();

$f2 = new Film();
$f2->naslov="Another round";
$f2->reziser ="Tomas Vinterberg";
$f2->godinaIzdanja=2020;

$f2->stampaj();

$f3= new Film();
$f3->naslov="Artic";
$f3->reziser="Dzo Pena";
$f3->godinaIzdanja=2018;

$f3->stampaj();







?>