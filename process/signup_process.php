<?php
session_start();
error_reporting(E_ALL);
include_once "../classes/User.php";
include_once "../utilities/sanitizer.php";
if($_POST){

   if(isset($_POST["regbtn"])){

    
       $fullname=sanitizer($_POST["name"]);
       $email=sanitizer($_POST["email"]);
       $password=sanitizer($_POST["password"]);
       $cpassword=sanitizer($_POST["cpassword"]);
       $phone=sanitizer($_POST["phone"]);
       $adress=sanitizer($_POST["address"]);
       

         if(isset($_POST["state"])){
            $state=($_POST["state"]);
             
         }

      if(empty($fullname) || empty($email) || empty($password) || empty($cpassword) || empty($phone) || empty($adress)  || empty($state)){
        
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


       $user1=new User();
      $response=$user1->register_user($fullname,$email,$pass_hashed,$phone,$state,$adress);

  if($response){
    $_SESSION["successful"]="user registerd successfully";
        header("location:../signup.php");
        die();
    }

    }

}else{
  header("location:../signup.php");
}