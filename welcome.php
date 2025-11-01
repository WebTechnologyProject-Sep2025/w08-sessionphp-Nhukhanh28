<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
if (isset($_SESSION['user'])){
    echo "Welcome," . $_SESSION['user']
}
else{
    header('Location:login.html');
}
?>
</body>
</html>