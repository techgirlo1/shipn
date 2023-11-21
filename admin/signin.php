<?php
session_start();
  error_reporting(E_ALL);

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
        <div class="row" style="background-color:black ;">
            <div class="col-md-4">
            
            <h1>SHI<span>PN</span><span style="font-size: 10px;">LOGiSTICS</span></h1>
        </div>
          </div>
             
            <div class="row">
                
              <div class="col img-fluid" style="position: relative;" id="admin">
              
              <?php
                    if(isset($_SESSION["log_error"])){
                    ?>
                       
                        
                    <p class="text-center mt-5 py-2 alert alert-danger alert-dismissible" style="color:black"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><?php echo $_SESSION["log_error"];?></p>
                    
                    <?php unset($_SESSION["log_error"]);?>

               <?php
                    }
               ?>

              
                
                   <b> <p>Welcome Admin,Please Sign In</p></b>
              <div class="col adminform">
              
                <form method="post" action="process/signin_process.php" id="adf">
                    <input type="email" name="email" placeholder="Email Address" class="form-control my-5">
                    <input type="password" name="password" placeholder="Password" class="form-control">
                    <a href="#" id="pass">Forgot password?</a>
                
                </br>
                 
                 <button type="submit" name="logbtn" class="btn my-3" id="logi">SIGN IN</button>
                 
                </form>
                

               </div>
              </div>
            </div>
          </div>
       
       
       
        </div> 
      
          
          
           
    
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>