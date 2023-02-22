<?php /*phpinfo()?>*/
$name = "Jon Doe";
$age = 30;
$isStudent = true;
$height = 5.9;
$classes = ["Be1","fw1", "mobile"];
$greeting = "Hello ";
define("DAYS_IN_YEAR",365);
$message = "";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo "$name"?>
    <!-- Concatenations -->
    <h1><?php echo $greeting . $name?></h1>
    <h1><?php echo "My name is " . $name . "<br>";?></h1>
    <br>
    <?php echo $greeting .= "How are you {$name}";
    echo "<br>" . $greeting
    ?>

    <!-- Line Breaks-->
    <?php echo "<br>" . DAYS_IN_YEAR;
    echo "<br>" ?>

    <?php
    echo $age . nl2br("\n");
    ?>

    <!--Arithmetic Operators-->
    <?php echo $age + 10 ?>



    <?php 
    #while loop
        $counter = 0;
        while($counter < 5){
            echo $counter . "<br>";
            $counter++;
        }
        echo "<br>";
    #for loop
        for($counter = 10; $counter > 0; $counter--){
            $message = $message . $counter . "<br>";
        }
        echo $message;
    
    
        echo "<br>";
    #while in arrays
    $arr = ['sam', 'jon', 'doe'];
    while($counter < count($arr)){
        echo $arr[$counter] . "<br>";
        $counter++;
    }
    echo "<br>";

    #for loop in arrays
    for($counter = 0; $counter < count($arr); $counter++){
        echo $arr[$counter] . "<br>";
    }


    ?>
</body>
</html>