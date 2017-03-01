<?php
require_once 'trait.php';
class Car {
    use Condition;
    private $model;
    private $make;
    private $year;
    private $price;
    public function __construct($make,$year,$model,$price)
    {
        $this->make = $make;
        $this->year = $year;
        $this->model = $model;
        $this->price = $price;
    }
    public function getModel()
    {
        return $this -> model;
    }
    public function getMake()
    {
        return $this -> make;
    }
    public function getYear()
    {
        return $this -> year;
    }
    public function getPrice()
    {
        return $this -> price;
    }
}
?>