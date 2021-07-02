package Java;
import java.util.ArrayList;
import java.util.Map;


class UberVan extends Car{

Map<String, Map<String,Integer>> typeCarAccepted;
ArrayList<String> seatsMaterial;
Integer passenger;

public UberVan(String license, Account driver){
    super(license, driver);    

}

public UberVan(String license, Account driver,Map<String, Map<String,Integer>> typeCarAccepted,ArrayList<String> seatsMaterial){
    super(license, driver);
    this.typeCarAccepted = typeCarAccepted;
    this.seatsMaterial  = seatsMaterial;
    

}

@Override
public void setPassenger(Integer passengerUV) {
    if(passengerUV == 6){
        this.passenger=passengerUV;
        this.printDataCar();
    }else{
        System.out.println("Necesitas asignar 6 pasajeros");
    }

}

@Override
void printDataCar() {
    super.printDataCar();
    System.out.println(" Licencia : " + license + " Driver : " + driver.name);
    
}


}
