package Java;

class Main {
public static void main(String[] args) {
    //System.out.println("Hola Mundo!"); 

    UberX uberx = new UberX("1234", new Account("Dante Castillo", "Libro de Dinosaurios"), "Nissan", "Versa 2019");
    //uberx.passengers = 3;
    uberx.setPassenger(4);
    uberx.printDataCar();

   UberVan uberVan = new UberVan("QNWE123", new Account("Andres Herrera", "AND123")); 
    uberVan.setPassenger(6);


    UberVan uberV = new UberVan("Hola", new Account("Itzel Alonso", "INE2021"));
    uberV.setPassenger(6);



}
}

