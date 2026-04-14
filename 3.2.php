<?php
    $style = $_COOKIE["style"];
    $size = $_COOKIE["size"];
    $color = $_COOKIE["color"];
    $bgcolor = $_COOKIE["bgcolor"];

    echo "<body bgcolor= $bgcolor>";
    echo "<font style= $style>Hello";
    echo "<font size= $size>Hello";
    echo "<font color= $color>Hello";
?>