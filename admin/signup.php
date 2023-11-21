
<?php
session_start();
error_reporting(E_ALL);
$states = [
  "Abia","Adamawa","Akwa Ibom","Anambra", "Bauchi","Bayelsa","Benue","Borno","Cross River","Delta","Ebonyi","Edo","Ekiti","Enugu","Gombe", "Imo","Jigawa", "Kaduna","Kano","Katsina","Kebbi","Kogi","Kwara", "Lagos","Nasarawa","Niger","Ogun","Ondo","Osun","Oyo","Plateau","Rivers","Sokoto","Taraba","Yobe","Zamfara","fct"
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <style><?php include "assets/style.css";?></style>
    <title>Myproject</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row" style="background-color: black;">
            <div class="col-12">
                
                        
                      <h1>SHI<span>PN</span><span style="font-size: 10px;">LOGiSTICS</span></h1>
                      
                    </div>
            </div>
            <div class="row">
                <div class="col-12"style="width: 500px;margin:auto">

                
                    
                    <h3 class="my-3" style="text-align: center;" >Admin sign up</h3>

                    <?php
                    if(isset($_SESSION["log_error"])){
                    ?>
                       
                        
                    <p class="text-center mt-5 py-2 alert alert-danger alert-dismissible" style="color:black"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><?php echo $_SESSION["log_error"];?></p>
                    
                    <?php unset($_SESSION["log_error"]);?>

               <?php
                    }
               ?>
                  <form method="post" action="process/signup_process.php">
                    
                     
                     <input type="Email"name="email" placeholder="Email Address"class="form-control my-3 ">
                     
                     
                     
                     
                     <input type="password"name="password" placeholder="Password"class="form-control my-3 ">
                     <input type="password"name="cpassword" placeholder="Confirm Password"class="form-control my-3 ">
                     <button  type="submit" name="regbtn" class="btn form-control" style="background-color: rgb(30, 255, 0); color: white;">Sign up</button>
                     </form>
                    
                    
                    </div>
                </div>

               
                
            
                
    
    
                </div>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>