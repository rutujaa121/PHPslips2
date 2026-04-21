<?php
session_start();
if(!isset($_SESSION["attempt"]))
{
    $_SESSION["attempt"]=0;
}
$name="rutuja";
$pass="rutu12";
if(isset($_POST["submit"]))
{
    $n=$_POST["n"];
    $p=$_POST["p"];
    if(($n==$name)&&($p==$pass))
    {
       header('Location:student.xml');
    }
    else
    {
        $_SESSION["attempt"]++;
        $rem=3-($_SESSION["attempt"]);
        echo"Reamaining Attampts:".$rem;
    }
}
?>
<html>
    <body>
        <?php
        if($_SESSION["attempt"]<3)
        {
        ?>
        <form method="POST">
            Enter name:<input type="text"name="n"><br>
            Enter PASS:<input type="text"name="p"><br>
            <input type="submit"name="submit">
        </form>
        <?php
        }
        ?>
    </body>
</html>