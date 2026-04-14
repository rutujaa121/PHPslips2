<?php
    session_start();

    $name = $_POST['name'];
    $addr = $_POST['addr'];
    $mob = $_POST['mob'];

    $_SESSION['name']= $name;
    $_SESSION['addr']= $addr;
    $_SESSION['mob']= $mob;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="7.2.php" method="POST">
        Product Name <input type="text" name="pname"><br><br>
        Product Qty <input type="text" name="qty"><br><br>
        Product Rate <input type="text" name="rate"><br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>