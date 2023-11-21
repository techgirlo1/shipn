
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

                
                    
                    <h3 class="my-3" style="text-align: center;" >Sign up with us</h3>
                    
                    
                    <?php
                    if(isset($_SESSION["successful"])){
                    ?>
                       
                        
                    <p class="text-center mt-5 py-2 alert alert-success alert-dismissible" style="color:black"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><?php echo $_SESSION["successful"];?></p>
                    
                    <?php unset($_SESSION["successful"]);?>

               <?php
                    }
               ?>






                    <?php
                    if(isset($_SESSION["log_error"])){
                    ?>
                       
                        
                    <p class="text-center mt-5 py-2 alert alert-danger alert-dismissible" style="color:black"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><?php echo $_SESSION["log_error"];?></p>
                    
                    <?php unset($_SESSION["log_error"]);?>

               <?php
                    }
               ?>
                  <form method="post" action="process/signup_process.php">
                    
                     <input type="text"name="name" placeholder="Fullname"class="form-control my-3 " required>
                     <input type="Email"name="email" placeholder="Email Address"class="form-control my-3" required>
                     
                     <input type="phone number"name="phone" placeholder="Enter Phone Number"class="form-control my-3 ">
                     <select value='Select Country' class="form-control my-3 ">
                      <option value="select country">Select Country</option>    
                      <option value="Nigeria">Nigeria</option>
                     </select>
                     
                     
                     <select name="state" id="" class="form-control">
                              <?php
                               echo "<option value='' disabled selected>Select State</option>";
                               foreach($states as $key){
                                    
                                     echo"<option value='$key'>$key</option>";
                                
                               }
                               ?>
                         </select>
                     <input type="text"name="address" placeholder="Address"class="form-control my-3"required>
                     <input type="password"name="password" placeholder="Password"class="form-control my-3" required>
                     <input type="password"name="cpassword" placeholder="Confirm Password"class="form-control my-3" required>
                     <button  type="submit" name="regbtn" class="btn form-control" style="background-color: rgb(30, 255, 0); color: white;">Sign up</button>
                     </form>
                       Already have an account?<a href="signin.php">Login
                       </a>
                    
                    </div>
                </div>

               
                
            
                <div class="modal fade" id="regis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="regis"><b>Sign in</b></h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <form method="get" action="">
                             <input type="email" name="email address" placeholder="Email Address" class="form-control ">
                             <input type="password" name="password" placeholder="Password" class="form-control my-3">
                             </form>
                          <a href="#" style="color: black;">Forgot password?</a>
                        </div>
                        <div class="modal-footer">
                        
                          <a href="home1.php" style="background-color: gold;color: white;width: 500px;text-align: center;border-radius: 10px;height:30px ;text-decoration: none;">Login</a>
                          
                        </div>
                        <p style="text-align: center;">Don't have an account?<a href="signup.php">Sign up</a> </p>
                      </div>
                    </div>
                  </div>
                 
    
    
                </div>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>