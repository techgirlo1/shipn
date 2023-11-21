<?php
session_start();
error_reporting(E_ALL);
include "../classes/Admin.php";
include "../utilities/sanitizer.php";
if($_POST){

   if(isset($_POST["regbtn"])){

    
       
       $email=sanitizer($_POST["email"]);
       $password=sanitizer($_POST["password"]);
       $cpassword=sanitizer($_POST["cpassword"]);

      if( empty($email) || empty($password)){
        
        $_SESSION["log_error"]="All fields are required";
        header("location:../signup.php");
        die();
    }

       if($password != $cpassword){
          
          $_SESSION["log_error"]="password does not match";
        header("location:../signup.php");
        die();
          
       }
      
       if(strlen($password) < 8){
        $_SESSION["log_error"]="password lenght must be at least 8";
        header("location:../signup.php");
        die();
       }
       $pass_hashed=password_hash($password,PASSWORD_DEFAULT);


       $admin1=new Admin();
      $response=$admin1->register_admin($email,$pass_hashed);

  if($response){
    header("location:../signin.php");
  }else{
    echo "error";
  }

    }

}else{
  header("location:../signup");
}