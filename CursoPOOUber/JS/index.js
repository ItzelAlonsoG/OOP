var car = new Car ("AW123", new Account("Andres Herrera","QWEQWE"));
car.passenger = 4;
car.printDataCar();

var Uberx = new UberX("AW1234", new Account("Itzel alonso","qeqw"),"Kia","2021");
Uberx.printDataCar();
console.log(Uberx);

var user = new User("Itzel Alonso", "INE");
user.printAccount();

var driver = new User("Dante Castillo", "Cartilla");
driver.printAccount();