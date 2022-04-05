<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Area and Perimeter of a trapezoid, PHP">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Stella S">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./fav_index/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./fav_index/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./fav_index/favicon-16x16.png">
    <link rel="manifest" href="./fav_index/site.webmanifest">
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Calculating Area and Perimeter of a Trapezoid</title>
  </head>
  <center><body>
    
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Calcaulating Area and Perimeter using PHP</h1>";
			echo "<h3>Calculate the Area and Perimeter of a Trapezoid.</h3>";
		?>

    <!-- Values for calculating area and perimeter of trapezoid-->
    <form action="./results.php" method="post" target="results">  
      <label for=SideA">Side a :</label>
      <input type="number"  name="sideA" id="sideA" placeholder="Side a of Trapezoid" name="sideA"><br><br>

            <label for=SideB">Side b :</label>
      <input type="number"  name="sideB" id="sideB" placeholder="Side b of Trapezoid" name="sideB"><br><br>

            <label for=Height">Height :</label>
      <input type="number"  name="height" id="height" placeholder="height of Trapezoid" name="height"><br><br>

      <input type="submit" value="Pay">
    <!-- iframe for the results to show on the web page. -->
      <iframe id="results" name="results">			
	    </iframe>
  </body></center>
</html>