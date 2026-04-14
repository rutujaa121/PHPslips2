<?php
    $style = $_POST["s1"];
    $size = $_POST["s2"];
    $color = $_POST["s3"];
    $bgcolor = $_POST["s4"];

    echo "Style is: ".$style."<br>";
    echo "Size is: ".$size."<br>";
    echo "Color is: ".$color."<br>";
    echo "Bgcolor is: ".$bgcolor."<br>";

    setcookie("style",$style,time()+3600);
    setcookie("size",$size,time()+3600);
    setcookie("color",$color,time()+3600);
    setcookie("bgcolor",$bgcolor,time()+3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="3.2.php"> Click Here </a>
</body>
</html>