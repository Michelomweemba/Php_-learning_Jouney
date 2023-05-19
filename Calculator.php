<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action="calculator.php" method="post">
       Firstnumber: <input type = "number" name="numb1"><Br>
       Secondnumber: <input type = "number" name="numb2"><br>
       Op: <input type = "text" name="Op"><br>
        <input type="submit">
    <?php
$numb1 = $_POST ["numb1"];
$numb2 = $_POST ["numb2"];
$Op = $_POST["Op"];

    if ($Op == "+"){
echo $numb1 + $numb2;

    }elseif($Op == "-"){
echo $numb1 - $numb2;

    }elseif($Op == "/"){
echo $numb1 / $numb2;

    }elseif($Op == "*"){
echo $numb1 * $numb2;

    }else
echo "invalid operator";
    ?>
</body>
</html>