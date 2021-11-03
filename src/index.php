<?php

require '../vendor/autoload.php';

use Petrik\GeriTigrisek\Tigris;

$tigris = new Tigris(7,"a", "b", new DateTime());
$tigris->kiir();

?>