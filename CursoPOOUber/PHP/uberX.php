<?php
require_once('car.php');
class UberX extends Car {
public $brand;
public $model;

public function __construct($license, $driver, $brand, $model){
    parent::__construct($license,$driver);
    $this->brand = $brand;
    $this->model = $model;
}
public function setPassenger ($passenger){
    if($passenger == 4){
        $this->passenger =$passenger;
        $this->printDataCar();
    }else{
        echo "<br>UberX --Necesitas asignar 4 pasajeros";
    }
}

public function printDataCar() {
    echo "<br> UberX | Licencia: $this->license | Driver: ".$this->driver->name ;
    echo  " | Modelo: $this->model | Driver:  $this->brand";
}

}
?>