<?php
class Auto
    {
        // polja
        private $marka;
        private $boja;
        private $imaKrov;

        // metode
         //KONSTRUKTOR
         public function __construct($m,$b,$ik)
         {
            $this->setMarka($m);
            $this->setBoja($b);
            $this->setImaKrov($ik);
         }
        //U klasi Automobil, dodati tri metode za postavljanje odgovarajućih polja.

        // GETERI: vracaju vrednosti polja
              

        public function getMarka()
        {
            return $this->marka;
        }

        public function getBoja()
        {
            return $this->boja;
        }

        public function getImaKrov()
        {
            return $this->imaKrov;
        }

        // SETERI: postavljaju vrednosti polja

       private function setMarka($m)
        {
            if ($m != "")
            {
                $this->marka = $m;
            }
            else
            {
                $this->marka = "Fiat";
            }
        }

        private function setBoja($b)
        {
            $this->boja = $b;
        }

        private function setImaKrov($ik)
        {
            if($ik === true || $ik === false)
            {
                $this->imaKrov = $ik;
            }
            else
            {
                $this->imaKrov = false;
            }
        }




        private function sviraj()
        {
            echo "<p>Beep! Beep!</p>";
        }

        public function ispis()
        {
            $this->sviraj();
            echo "<p>Automobil marke " . $this->marka. " boje " . $this->boja;
            if ($this->imaKrov)
            {
                echo " ima krov";
            }
            else
            {
                echo " nema krov";
            }
            echo "</p>";
        }
    }

    // Kada se kreira klasa, obicno se na sledeci nacin implementira:
    // 1) Sva polja stavimo da su privatna,
    // 2) Za svako polje napisemo geter i seter
    //    2.1) geter: dohvata (cita) vrednost polja
    //    2.2) seter: postavlja novu vrednost polju

   


     //1) Kreiramo objekat
    // $a1= new Auto(); 
 $a1 = new Auto("BMW", "plava", false);
    //   2 )) Setujemo vrednosti polja(Kada imamo konstruktor nema potrebe da setujemo vrednosti polja)
    //      $a1->setMarka("BMW");  ovako setovane vrednosti nam ne kažu da odma pri kreiranju objekta setujemo i ove vrednosti, 
    //       $a1->setboja("plava"); ako ispis bude pre nista se neće ispistati, iz tog razloga ćemo staviti odmah kad kreiramo objekat ubacicemo vrednosti
    //       $a1->setImaKrov(false);
 // da bi moglo ovako da radi ("BMW","plava", false)tj da obezbedi ovakav ispis, mora da se obezdebi konstruktor unutar klase, posebna metoda u klasi koja ce da pozove konstruktor, 
  //ne moze proizvoljno ime vec je specijalna metoda mora da se zove tako(ne moze kao geter i seter proizvoljno),
//   a unutar nje se postavljaju vrednosti svim poljima  a posto vec imamo setere u klasi onda samo pozivamo seter, konstruktor se jednom poziva za isti objekat
//   3) Koristimo objekat, zovemo metodu ispis
 $a1->ispis();







 







?>