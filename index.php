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
    <link rel="apple-touch-icon" sizes="180x180" href="./favs/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favs/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favs/favicon-16x16.png">
    <link rel="manifest" href="./favs/site.webmanifest">
    
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    
    <!-- Title -->
    <title>Calculating Area and Perimeter of a Trapezoid</title>
  </head>
  
  
  <center><body>  

		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Calculating Area and Perimeter using PHP</h1>";
    ?>

    <img src="./image/p_a_trapezoid.png" alt="Trapezoid" width="30%" height="auto"/>
    
  <?php
			echo "<h3>Calculate the Area and Perimeter of a Trapezoid.</h3>";
		?>

    <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="checkbox-2">
  <input type="checkbox" id="checkbox-2" class="mdl-checkbox__input">
  <span class="mdl-checkbox__label">Press the box if you're ready to calculate the area and perimeter of a trapezoid PAIN FREE!</span>
</label>
    
    <!-- Values for calculating area and perimeter of trapezoid-->
    <form action="./results.php" method="post" target="results">  
      <label for=SideA">Side a (cm) :</label>
      <input type="text"  name="sideA" id="sideA" placeholder="Side a of Trapezoid" name="sideA"><br><br>

            <label for=SideB">Side b (cm):</label>
      <input type="text"  name="sideB" id="sideB" placeholder="Side b of Trapezoid" name="sideB"><br><br>

            <label for=SideC">Side c (cm) :</label>
      <input type="text"  name="sideC" id="sideC" placeholder="Side c of Trapezoid" name="sideC"><br><br>

            <label for=SideD">Side d (cm) :</label>
      <input type="text"  name="sideD" id="sideD" placeholder="Side d of Trapezoid" name="sideD"><br><br>

            <label for=Height">Height (cm) :</label>
      <input type="text"  name="height" id="height" placeholder="height of Trapezoid" name="height"><br><br>

      <input type="submit" value="Calculate">
    <!-- iframe for the results to show on the web page. -->
      <iframe id="results" name="results">	
      </iframe>


      <p>??How much did this help you??</p>
    <!-- Slider with Starting Value -->
    <input class="mdl-slider mdl-js-slider" type="range"
      min="0" max="100" value="50" tabindex="0">
      
  </body></center>
</html>