<?php
require_once 'car.php';
class Suv extends Car {
    private $chassis;
    public function getChassis()
    {
        return $this -> description();
    }
    private function description()
    {
        return 'light truck chassis with high ground clearance and no separate cargo compartment';
    }
   
}
?>
