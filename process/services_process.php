<?php
session_start();
// include_once "../utilities/sanitizer.php";
include_once "../classes/Product.php";
include_once  "guards/user_guard.php";
    if($_POST){
       if(isset($_POST["next"])){
        
        $sname=$_POST["sname"];
        $pickup=$_POST["pickup"];
        $rname=$_POST["rname"];
        $sphone=$_POST["snumber"];
        $rphone=$_POST["number"];
        $state=$_POST["state"];
        $lga=$_POST["lga"];
        $delivery=$_POST["Delivery"];
        $qty=$_POST["quantity"];
        $pname=$_POST["pname"];
        $weight=$_POST["weight"];
        $profile=$_FILES["pics"];
        $user_id=$_POST["user_id"];
        $button=$_POST["button"];
        $type=$_POST["category"];
        
    

        if(empty($sname) || empty($pickup) || empty($rname) || empty($sphone) || empty($rphone) ||empty($state) || empty($lga) || empty($delivery) || empty($qty) || empty($pname) || empty($weight)  || empty($profile) || empty($type)){
        
            $_SESSION["log_error"]="All fields are required";
            header("location:../services.php");
            die();
        }
    
    
        $error=$profile["error"];

        if($error > 0){
           echo "please upload a valid file";
           exit();
        }
          
        
        //   check the pictures size and validate
      
        $file_size=$profile["size"];
        if($file_size > 1048576){
           echo "your profile pics cannot be larger than 1mb";
           exit();
        }
    
    
        // validate file type via the extension
    
        $allowed=["png","jpg","jpeg"];
         $filename=$profile["name"];
    
         $arrfilename=explode(".",$filename);
    
         $file_ext= end($arrfilename);
         
    
         if(!in_array($file_ext,$allowed)){
              echo "pleasse upload an image with file png,jpg or jpeg";
              exit();
         }
    
         $final_file="shipn" . time() . "." . $file_ext;
             $destination="../uploads/$final_file";
             $tempo=$profile["tmp_name"];
            $fileUploaded=move_uploaded_file($tempo,$destination);


       
         $add_pro=new Product();
         $response=$add_pro->insertProduct($pname,$weight, $qty,$final_file,$sname,$sphone,$rname,$rphone,$state,$lga,$delivery,$user_id,$button,$type);
 
         if($response){
            
                header("location:../prod_view.php");
                die();
            }


        }

        
        
       }




    


?>