<?php 
	if(empty($_POST['name']) || empty($_POST['model']) || empty($_POST['condition']) || empty($_POST['type']) || empty($_POST['price']) || empty($_POST['year'])) {
		echo "<p>Empty values are not allowed</p>";
		echo '<p><a href="index.php">Try again</p>';
		exit;
	}
	$name = $_POST['name'];
	$model= $_POST['model'];
    $condition= $_POST['condition'];
    $type= $_POST['type'];
	$price = $_POST['price'];
	$year = $_POST['year'];
    $description;
	require_once 'car.php';
    require_once 'suv.php';
    require_once 'saloon.php';
    if ($type == 'Saloon'){
       $car = new Saloon($name,$year,$model,$price);
       $description = $car -> getBase() ;
    }
    else{
      $car = new Suv($name,$year,$model,$price);
       $description = $car -> getChassis() ;
    }
    
echo "<h2>Your Selection:</h2>";
echo $name. '  ' . 'bought'."<br>";
echo '<hr>';
echo  "Type:" . ' ' .$car ->getModel()."<br>";
echo '<hr>';
echo "Price:" . ' ' .$car -> getPrice()."<br>";
echo '<hr>';
echo $car -> mileage($condition)."<br>";
echo '<hr>';
echo "Car features:" . ' ' .$description;
	
?>