<?php
require_once('car.php');
class UberVan extends Car {
   public $typeCarAccepted;
    public $seatsMaterial;

    // public function __construct($license, $driver){
    //     parent::__construct($license,$driver);
    // }

    public function __construct($license, $driver, $typeCarAccepted, $seatsMaterial){
        parent::__construct($license,$driver);
        $this->typeCarAccepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMaterial;
    }


    public function setPassenger ($passenger){
        if($passenger == 6){
            $this->passenger =$passenger;
            $this->printDataCar();
        }else{
            echo "<br>UberVan --Necesitas asignar 6 pasajeros";
        }
    }

    public function printDataCar() {
        echo "<br> UberVan --Licencia: $this->license Driver: ".$this->driver->name ;
    }


}
?>