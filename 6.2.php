<?php
    $empno = $_COOKIE["empno"];
    $empname = $_COOKIE["empname"];
    $empaddr = $_COOKIE["empaddr"];

    $basic = $_POST['b'];
    $da = $_POST['d'];
    $hra = $_POST['h'];

    echo "<br>Emp No: ".$empno;
    echo "<br> Emp Name: ".$empname;
    echo "<br> Emp Addr: ".$empaddr;

    echo "<br> Emp Basic: ".$basic;
    echo "<br> Emp DA: ".$da;
    echo "<br> Emp HRA: ".$hra;
?>