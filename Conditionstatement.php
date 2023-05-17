<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Php Learning Journey</title>
</head>
<body>
    <?php
    $ismale = false;
    $istall = false;
    if($ismale && $istall){
echo "You are male tall";
    }
    elseif( $ismale && !$istall){
        echo "You are short male";

    }elseif( !$ismale && $istall){

        echo "You are not male  but are tall";
    }
     else{
        echo "You are not male tall and not male ";
    }
    ?>
</body>
</html>