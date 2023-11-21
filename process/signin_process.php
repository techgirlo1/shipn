<?php

session_start();
error_reporting(E_ALL);
include_once "../classes/User.php";
include_once "../utilities/sanitizer.php";


if($_POST){

    if(isset($_POST["logbtn"])){
    
        $email=sanitizer($_POST["email"]);
        $password=sanitizer($_POST["password"]);
        

        if(empty($email) || empty($password)){
            $_SESSION["log_error"]="All fields are required";
            header("location:../signin.php");
            exit();
        } 


        $user1= new User();
        $response=$user1->login($email,$password);

        if($response){
            $_SESSION["log_error"]="Either email or password is wrong";
            header("location:../signin.php");
            exit();
        }

    }



}else{
header("location:../signin.php");

}


?>