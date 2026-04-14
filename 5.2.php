<?php
    session_start();
    $eno = $_SESSION["eno"];
    $ename = $_SESSION["ename"];
    $addr = $_SESSION["addr"];

    $basic = $_POST["basic"];
    $da = $_POST["da"];
    $hra = $_POST["hra"];

    echo "<h3> Emp information </h3>";
    echo "<br>Emp No: ".$eno;
    echo "<br>Emp Name: ".$ename;
    echo "<br>Emp Addr: ".$addr;

    echo "<h3> Emp salary </h3>";
    echo "<br>Basic: ".$basic;
    echo "<br>DA: ".$da;
    echo "<br>HRA: ".$hra;
?>