<?php
 session_start();
 if(isset($_GET['x'])){
    unset($_SESSION["user"]);
    header("location:../index.php");

}
?>
