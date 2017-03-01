
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cytonn Bazaar</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post" action="car_action.php" style="width:50%" class="center" >
	<fieldset>
	<legend>Choose car</legend>
	<p>
		<div><label for="name">Full name:</label> <input type="text" name="name" id="name" /> </div>
	<br>
       <div>
        <label for="model">Model:</label> 
	    <select name="model">
         <option value="Mitsubishi">Mitsubishi</option>
         <option value="Subaru">Subaru</option>
         <option value="Nissan">Nissan</option>
         <option value="Honda">Honda</option>
       </select>
       </div>
	<br>
       <div>
        <label for="condition">Condition:</label> 
	    <select name="condition">
         <option value="New">New</option>
         <option value="Used">Used</option>
       </select>
       </div>
	<br>
      <div>
        <label for="type">Type:</label> 
	    <select name="type">
         <option value="Saloon">Saloon</option>
         <option value="Suv">Suv</option>
       </select>
       </div>
	<br>
	   <div><label for="price">Price:</label> <input type="text" name="price" id="price" /> </div>
	<br>
      <div><label for="year">Year:</label> <input type="text" name="year" id="year" /> </div>
	</p>
	<p class="center" ><input value="Register" id="register" type="submit" /></p>
	</fieldset>
</form>
<?php

?>
</body>
</html>

