<?php
require_once("car.php");
require_once("uberX.php");
require_once("uberPool.php");
require_once("account.php");
require_once("uberVan.php");
require_once("uberBlack.php");

$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
$uberX->setPassenger(4);


$uberPool = new UberPool("TYU567", new Account("Andrea Ferran", "ANDA765"), "Dodge", "Attitude");
$uberPool->setPassenger(2);

$uberVan = new UberVan("QWEQ", new Account("Itzel","ine"),"car","chido");
$uberVan->setPassenger(6);

$uberBlack = new UberBlack("QWEQ", new Account("Itzel","ine"),"car","chido");
$uberBlack->setPassenger(7);



?>