<?php
 class Car{
    public $color;
    public $model;
    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
    public function message(){
        return "My car is ". $this->color."color and ". $this->model. "Model.";
    }
 }
 $car = new Car("Yello", "Tesla");
 $car = (array)$car;
 var_dump($car);
 $car = (object)$car;
 var_dump($car);

 $ax= null;
 $ax = (object)$ax;
 var_dump($ax); //null value can converts an empty object.
?>