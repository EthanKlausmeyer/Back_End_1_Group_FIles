<?php

//overwrite values
setcookie('username', "Sam Smith", time() + (8600 * 3));

//delete cookie
// setcookie('username', "Sam Smith", time() - (8600 * 3));

if (isset($_COOKIE['username'])) {
    echo 'username' . $_COOKIE['username'] . 'is set';
} else {
    echo 'username is not set';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 2 Cookies</title>
</head>

<body>
</body>

</html>