<?php

class Vehicle {
    protected $make;
    protected $model;
    protected $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    final public function getDetails() {
        return "Make: {$this->make}, Model: {$this->model}, Year: {$this->year}";
    }

    public function describe() {
        return "This is a vehicle.";
    }
}

class Car extends Vehicle {
    private $doors;

    public function __construct($make, $model, $year, $doors) {
        parent::__construct($make, $model, $year);
        $this->doors = $doors;
    }

    public function describe() {
        return "This is a car with {$this->doors} doors.";
    }
}

final class Motorcycle extends Vehicle {
    public function __construct($make, $model, $year) {
        parent::__construct($make, $model, $year);
    }

    public function describe() {
        return "This is a motorcycle.";
    }
}

interface ElectricVehicle {
    public function chargeBattery();
}

class ElectricCar extends Car implements ElectricVehicle {
    private $batteryLevel;

    public function __construct($make, $model, $year, $doors) {
        parent::__construct($make, $model, $year, $doors);
        $this->batteryLevel = 100; 
    }

    public function chargeBattery() {
        $this->batteryLevel = 100;
        return "The battery is fully charged.";
    }

    public function describe() {
        return "This is an electric car with {$this->batteryLevel}% battery charge.";
    }
}


$car = new Car("Honda", "Civic Type R", 2024, 4);
$motorcycle = new Motorcycle("Yamaha", "YZ450F", 2023);
$electricCar = new ElectricCar("Tesla", "Model 3", 2023, 4);
   
echo $car->getDetails() . "\n";             
echo $car->describe() . "\n";          
echo "\n";
echo $motorcycle->getDetails() . "\n";      
echo $motorcycle->describe() . "\n";         
echo "\n"; 
echo $electricCar->getDetails() . "\n";       
echo $electricCar->describe() . "\n";         
echo $electricCar->chargeBattery() . "\n";   
?>