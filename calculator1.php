<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cost Calculator</title>
</head>
<body>
<?php // This function performs quantity and price calculations
function calculate_total($quantity, $price){
	$total = $price * $quantity; // Calculation
	$total = number_format($total, 2); // Formatting 
	
	return $total; // Return the value
} // End of function
// Check of function
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	// Check for values
	if ( is_numeric($_POST['quantity']) AND is_numeric($_POST['price']) ) {
		
		// call the function and print the results
		$total = calculate_total($_POST['quantity'], $_POST['price']);
		print "<p>Your total comes to $<span style=\"font-weight: bold;\">$total</span>.</p>";
	
	} else { //Inappropriate values entered
		print '<p style="color: red;">Please enter a vaild quantity and price!</p>';
	}
}
?>
<form action="" method="post">
	<p>Quantity: <input type="text" name="quantity" size="3"></p>
	<p>Price: <input type="text" name="price" size="5"></p>
	<input type="submit" name="submit" value="Calculate!">
</form>
</body>
</html>

