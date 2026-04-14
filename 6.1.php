<?php
    setcookie("empno",$_POST['eno']);
    setcookie("empname",$_POST['ename']);
    setcookie("empaddr",$_POST['addr']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="6.2.php" method="post">
        Basic <input type="text" name="b"><br><br>
        DA <input type="text" name="d"><br><br>
        HRA <input type="text" name="h"><br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>