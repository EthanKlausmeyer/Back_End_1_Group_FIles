<?php
session_start();

$name = $_SESSION['name'];
$email = $_SESSION['email'];

if (isset($_SESSION['counter'])) {
    $_SESSION['counter']++;
} else {
    $_SESSION['counter'] = 1;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2 Sessions</title>
</head>

<body>
    <h1>You have visited this page <?= $_SESSION['counter'] ?> times</h1>
    <h1>Hello I'm <?= $name ?> and my email is <?= $email ?></h1>
    <a href="page3.php">Page_3</a>
</body>

</html>