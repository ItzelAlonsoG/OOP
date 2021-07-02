<?php
require_once('car.php');
class UberBlack extends Car {
public $typeCarAccepted;
public $seatsMaterial;

public function __construct($license, $driver, $typeCarAccepted, $seatsMaterial){
    parent::__construct($license,$driver);
    $this->typeCarAccepted = $typeCarAccepted;
    $this->seatsMaterial = $seatsMaterial;
}

public function setPassenger ($passenger){
    if($passenger == 4){
        $this->passenger =$passenger;
        $this->printDataCar();
    }else{
        echo "<br>UberBlack --Necesitas asignar 6 pasajeros";
    }
}

public function printDataCar() {
    echo "<br> UberBlack --Licencia: $this->license Driver: ".$this->driver->name ;
}

}
?>