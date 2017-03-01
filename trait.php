<?php
trait Condition {
  public function mileage($age)
  {
      if($age == 'New')
      return "This car is new";
      else
      return "This car is old";
  }
}
?>