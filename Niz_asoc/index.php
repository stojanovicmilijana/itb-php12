<?php

$student = [
  ["nazivIspita" => "Engleski", "datumPolaganja" => "2021/08/05", "ocena" => 7],
  ["nazivIspita" => "Matematika", "datumPolaganja" => "2021/09/13", "ocena" => 10],
  ["nazivIspita" => "Baze podataka", "datumPolaganja" => "2021/08/25", "ocena" => 7],
  ["nazivIspita" => "Fizika I", "datumPolaganja" => "2022/10/06", "ocena" => 6],
  ["nazivIspita" => "Algoritmi i programiranje", "datumPolaganja" => "2022/06/05", "ocena" => 9],
  ["nazivIspita" => "Eletronske komponente", "datumPolaganja" => "2022/06/05", "ocena" => 10]
];

//fja prosekocena
function prosekOcena($student)
{
    $sum = 0;
    for ($i = 0; $i < count($student); $i++) {
        $sum += $student[$i]["ocena"];
    }
    return $sum / count($student);
}
echo "<h2>Zadatak 1</h2>";
echo  prosekOcena($student);
//echo $student[0]['ocena'];
//fja  MaxOcena
function MaxOcenaStudenta($student) {
    $max=$student[0]['ocena'];
    for ($i=0; $i <count($student) ; $i++) {
        if ($student[$i]['ocena'] > $max) {
            $max= $student[$i]['ocena'];
        }
    }
    return $max;
}
echo "<h2> zadatak 2</h2>";
echo MaxOcenaStudenta($student);
//f-ja broj predmeta sa max ocenom
function brPredmetaMaxOcena($student) {
    $max=MaxOcenaStudenta($student);
    $brojac=0;
    for ($i=0; $i <count($student) ; $i++) {
        if ($student[$i]['ocena'] == $max) {
            $brojac++;
        }
    }
    return $brojac;
}
echo "<h2> zadatak 3</h2>";
echo brPredmetaMaxOcena($student);
//student generacija (ako nema oscenu ispod 9 i ima vise 10ki)
function SudentGeneracijeJe($student) {
    $devet=0;
    $deset=0;
    for ($i=0; $i <count($student) ; $i++) {
            if ($student[$i]['ocena'] >=9) {
                if ($student[$i]['ocena'] == 9) {
                    $devet++;
                }
                else {
                    $deset++;
                }
            }
            else {
                return false;
            }
    }
    if ($deset > $devet) {
        return true;
    }
    else {
        return false;
    }
}
if (SudentGeneracijeJe($student)) {
    echo"<br>Studen je kandidat za djaka generacije";
}
else {
    echo"<br>Studen NIJE kandidat za djaka generacije";
}




?>