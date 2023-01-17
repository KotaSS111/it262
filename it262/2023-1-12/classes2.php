<?php

// classes2.php

$cars[] = new Car('Porche', '911', 12345, 'red');
$cars[] = new Car('Toyota', 'Prius', 10000, 'blue');
$cars[] = new Car('Honda', 'Accord', 50000, 'silver');

$total = 0;

foreach($cars as $myCar){
   echo "<p>My car is a $myCar->color $myCar->make $myCar->model that has $myCar->mileage miles on the odometer</p>";

   $total += $myCar->mileage;
}

$carCount = count($cars);
$average = $total/$carCount;
$average = number_format($average, 2);

echo "<p>I have $carCount cars and the average mileage is $average</p>";


class Car {

 public $make = '';
 public $model = '';
 public $mileage = 100;
 public $color = '';

 public function __construct($make, $model, $mileage, $color) {
    $this->make = $make;
    $this->model = $model;
    $this->mileage = $mileage;
    $this->color = $color;
 }



}