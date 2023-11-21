<?php
// check if someone is not logged in
// user id will not be in session

if(!isset($_SESSION["admin_id"])){
    header("location:signin.php");
    exit();
}


?>