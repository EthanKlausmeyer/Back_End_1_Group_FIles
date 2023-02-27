<?php 
$name = ['name'=>'sam smith', 'email' => 'sam@gmail.com', 'age' => '31'];

$user = serialize($user);
setcookie('user', $user, time() + 3600);
$user = unserialize($_COOKIE['user']);
echo $user['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 3 Cookies</title>
</head>
<body>
    
</body>
</html>