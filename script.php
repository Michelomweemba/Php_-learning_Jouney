<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action = "script.php" method ="get">

color: <input type="text" name="color"><br>

pruralNoun: <input type="text" name="pluralNoun"><br>

celebrity:  <input type="text" name="celebrity"><br>

submit:     <input type="submit">

</form> 
<br><br>

<?php

$color = $_GET ["color"];
$pruralNoun = $_GET ["pruralNoun"];
$celebrity = $_GET ["celebrity"];
 echo "Roses are $color <br>"; 
 echo "$pruralNoun are blue <br>";
 echo "I love $celebrity <br>";
?>
</body>
</html>

