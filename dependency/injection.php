<?php
class Chef {
    private $firstName;
    private $lastName;
    private $hotel;
 
    public function __construct($firstName, $lastName,$hotel) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->hotel = $hotel;
    }
 
    public function getFirstName() {
        return $this->firstName;
    }
 
    public function getLastName() {
        return $this->lastName;
    }
    public function getHotel() {
        return $this->hotel;
    }
}
 

class Recipe{
    private $chef;
    private $recipe;
 
    public function __construct($recipe, Chef $chef) {
        $this->chef = $chef;
        $this->recipe = $recipe;
    }
 
    public function getChef() {
        return $this->chef;
    }
 
    public function getRecipe() {
        return $this->recipe;
    }
}
?>
