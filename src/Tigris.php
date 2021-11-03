<?php

namespace Petrik\GeriTigrisek;

class Tigris {
    
    /*private $id;private $nev;private $tulaj_nev;private $orokbefogad_datum;public function __construct($id, $nev, $tulaj_nev, $orokbefogad_datum) {$this->id = $id;$this->nev = $nev;$this->tulaj_nev = $tulaj_nev;$this->orokbefogad_datum = $orokbefogad_datum;}*/

    public static function kiir() : array {
        global $db;

        $t = $db->query("SELECT * FROM tiger")
            ->fetchAll();
        $eredmeny = [];

        foreach ($t as $elem) {
            $tigris = new Tigris($elem['id'], $elem['nev'], $elem['tulaj_nev'], new DateTime($elem['datum']));
            $eredmeny[] = $bejegyzes;
        }

        return $eredmeny;
    }

}

?>