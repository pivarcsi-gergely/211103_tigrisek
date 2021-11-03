<?php

namespace Petrik\GeriTigrisek;

use DateTime;
// ^ vagy ez...
// vagy ez: \DateTime. \ = globális scope
class Tigris {
    
    private $id;
    private $nev;
    private $tulaj_nev;
    private $orokbefogad_datum;
    public function __construct(int $id,string $nev,string $tulaj_nev,DateTime $orokbefogad_datum) 
    {
        $this->id = $id;
        $this->nev = $nev;
        $this->tulaj_nev = $tulaj_nev;
        $this->orokbefogad_datum = $orokbefogad_datum;
    }

    public static function kiir() : array {
        global $db;

        echo "Barmi";
        $t = $db->query("SELECT * FROM tiger")->fetchAll();
        $eredmeny = [];

        foreach ($t as $elem) {
            $tigris = new Tigris($elem['nev'], $elem['tulaj_nev'], new DateTime($elem['datum']));
            $tigris->id = $elem['id'];
            $eredmeny[] = $tigris;
        }

        return $eredmeny;
    }

}

?>