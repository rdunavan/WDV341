<?php
session_start();

if(isset($_SESSION['validUser'])){
    session_unset();
    session_destroy();
    header("Location: mylogin.php");
}
else{
    header("Location: mylogin.php"); 
}


?>