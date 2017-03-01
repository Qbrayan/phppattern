<?php
require_once 'car.php';
class Saloon extends Car {
    private $base;
    
    public function getBase()
    {
        return $this -> description() ;
    }
    private function description()
    {
        return '5 to 7 inches clearance  with  separate cargo compartment';
    }
   
}
?>