<?php
    session_start();

    $name = $_SESSION['name'];
    $addr = $_SESSION['addr'];
    $mob = $_SESSION['mob'];

    $pname = $_POST['pname'];
    $qty = $_POST['qty'];
    $rate = $_POST['rate'];
    $total = $qty * $rate ;

    echo "Name: ".$name;
    echo "<br>Addr: ".$addr;
    echo "<br>mob: ".$mob;

    echo "<br><br>";

    echo "Product Name: ".$pname;
    echo "<br>Qty: ".$qty;
    echo "<br>Rate: ".$rate;
    echo "<br>Total: ".$total;
?>