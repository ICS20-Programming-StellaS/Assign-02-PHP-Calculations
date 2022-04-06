<?php
	// get the hours and hourly rate from text field
	$SideA = $_POST['sideA'];
	$SideB = $_POST['sideB'];
	$SideC = $_POST['sideC'];
	$SideD = $_POST['sideD'];
  $Height = $_POST['height'];
	// calculate the area and perimeter
	$Area = ($SideA + $SideB) * $Height/2 
?>

<?php
  // calulates the perimeter
  $Perimeter = $SideA + $SideB + $SideC + $SideD
?>

<h3>Results:</h3>
The area is <?php echo "$Area" ?> cm<sup>2</sup>.
<div>The perimeter is <?php echo "$Perimeter" ?> cm<sup>2</sup>.</div>