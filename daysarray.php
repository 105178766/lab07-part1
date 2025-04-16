<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using PHP Variables, arrays and operators</title>
</head>
<body>
   <h1>PHP Variables, arrays and operators</h1>
   <?php
        $days = array ("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"); // declare and initialize array
        echo "<p>The days of the week in English are:</p>";
        echo "<p>$days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6]</p>";
        $days = array ("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"); // declare and initialize array in French
        echo "<p>The days of the week in French are:</p>";
        echo "<p>$days[0], $days[1], $days[2], $days[3], $days[4], $days[5], $days[6]</p>";
    ?> 
</body>
</html>
