package Java;

class Main {
    public static void main(String[] args) {
     System.out.println("Hola Mundo!"); 
     Car car = new Car("AMQ1234", new Account("Andres Herrera", "AND123"));  
     car.passengers = 2;
     car.printDataCar();

     Car car2 = new Car("QWE697", new Account("Andrea Herrera", "ANDA1232"));
     car2.passengers = 3;
     car2.printDataCar();

     UberX uberx = new UberX("ALTA1997", new Account("Itzel Alonso", "INE"), "Buick", "Encore 2021");
     uberx.printDataCar();

     Tarjeta tarjeta = new Tarjeta(123);
     tarjeta.PrintDataPay();

     User usuario = new User("Itzel Alonso", "Inee");
     usuario.printAccount();

     Driver driver = new Driver("Dante Castillo", "Cartilla");
     driver.printAccount();

    }
}

