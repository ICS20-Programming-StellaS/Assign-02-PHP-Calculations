<?php
	// get the hours and hourly rate from text field
	$SideA = $_POST['sideA'];
	$SideB = $_POST['sideB'];
	$SideC = $_POST['sideC'];
	$SideD = $_POST['sideD'];
  $Height = $_POST['height'];
?>
<?php
	// calculate the area and perimeter
	$area = ($SideA + $SideB) * $Height/2;
  $area = number_format($area, 2);
?>

<?php
  // calulates the perimeter
  $perimeter = $SideA + $SideB + $SideC + $SideD;
  $perimeter = number_format($perimeter, 2);
?>

<h3>Results:</h3>
The area is <?php echo "$area" ?> cm<sup>2</sup>.
<div>The perimeter is <?php echo "$perimeter" ?> cm<sup>2</sup>.</div>