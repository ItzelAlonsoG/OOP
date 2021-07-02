from car import Car
from account import Account
from UberX import UberX


if __name__ == "__main__":
    print("Hola Mundo")
    car = Car("AMS234", Account("Andres Herrera","ANDA876"))
    print(vars(car))
    print(vars(car.driver))

    uberX = UberX("ALTA123", Account("Andres Herrera","nada") ,"Tsuru", "2021")
    print(vars(uberX))
    print(vars(uberX.driver))
