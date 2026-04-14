<?php
    session_start();
    $eno = $_POST["eno"];
    $ename = $_POST["ename"];
    $addr = $_POST["addr"];

    $_SESSION["eno"] = $eno;
    $_SESSION["ename"] = $ename;
    $_SESSION["addr"] = $addr;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="5.2.php" method="POST">
        Basic <input type="text" name="basic"><br><br>
        DA <input type="text" name="da"><br><br>
        HRA <input type="text" name="hra"><br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>