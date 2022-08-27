<?php
if($_POST)
{
    $num1 = $_POST['username'];
    $num2 = $_POST['password'];
    if($num1=="" || $num2==""){
        header("Location: blank.php");
exit();
    }
    elseif($num1 == "ashishraj5296@gmail.com" && $num2 == "akanand")
    {
        header("Location: loginsuccess.php");
exit();
    }    
    else
    {
        header("Location: loginfailed.php");
        exit();
    }

}
?>