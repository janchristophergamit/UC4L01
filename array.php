<?php

$cars = array("Volvo", "BMW", "Toyota"); 
$car2 = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)

?>

<!DOCTYPE html>
<html>
<head>
<title>array</title>
<body> 
<h1> User Profile</h1>

<div>The car that you want is <?php echo $cars2[0][0].": In stock: ".$cars2[0][1].", sold: ".$cars2[0][2].".<br>";
echo $cars2[1][0].": In stock: ".$cars2[1][1].", sold: ".$cars2[1][2].".<br>";
echo $cars2[2][0].": In stock: ".$cars2[2][1].", sold: ".$cars2[2][2].".<br>";
echo $cars2[3][0].": In stock: ".$cars2[3][1].", sold: ".$cars2[3][2].".<br>";;?></div>
<div>The car that you want is <?php echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";?></div>



</body>

</body>
</html>
