<?php
session_start();
$_SESSION['name'] = 'Sam Smith';
$name = $_SESSION['name'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 3 Sessions</title>
</head>

<body>
    <h1>Hello I'm <?= $name ?></h1>
    <a href="page2.php">Page_2</a>
    <a href="page4.php">Page_4</a>
</body>

</html>