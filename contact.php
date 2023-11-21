<?php
session_start();
error_reporting(E_ALL);

include "partials/header.php";


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
   
            </div>
            <div class="row">
                <div class="col-12"style="width:500px;margin:auto">
                    

                    
                    <div class="row">
                     <div class="col-12 contact">
                     <div style="text-align: center;">
                          <h1>Contact Us</h1>
                        </div>
                          

                         <input type="hidden" name="user_id" value= "<?php echo$_SESSION['user_id'] ;?>">
                        
                        
                         <div class="row my-3">
                            <div class="col-md-4">
                         <span class="cont">Contact</span><br>
                         <span class="con">Habeebat08@gmail.com</span>
                         </div>
                          <div class="col-md-4 mr-3">
                         <span class="cont">Based In</span><br>
                         <span class="con"> Lagos,Nigeria</span>
                         </div>
                         <div class="col-md-4 mr-3">
                         <span class="cont">Phone</span><br>
                         <span class="con"> +2348101293856</span>
                         </div>
                         </div>
                         
                     </div>
                    </div>
                     
                    
                    </div>
                  </div>
                
            
                   <?php
                      include "partials/footer.php";
                   ?> 
                  
                 
    
    
                </div>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>