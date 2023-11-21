
<?php
error_reporting(E_ALL);
session_start();
include_once  "guards/user_guard.php";
require_once "classes/Pay.php";
include_once "classes/User.php";
  
if(isset($_SESSION["user_id"])){
    $user_id=$_SESSION["user_id"];

    $userr=new User();
     $user=$userr->fetch_user_details($user_id);
     
          $final_user_id =$user['user_id'];

        }
$pay1= new Pay();
$payments=$pay1->fetch_payment($final_user_id);

    

    
     
     
     


  
    
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
                <div class="col-12"style="width: 800px;margin:auto">
                    <div style="margin-top: 20px;">
                        <form action="services.php" method="post">
                            <button class="btn btn-dark">Back</button>
                        </form>
                    </div>
                      <div class="row">
                        <div class="col-12">
                     <table class="table table-striped my-3" border=1>
                        <thead>
                            <th>S/N</th>
                            <th>Payment Date</th>
                            <th>Payment Amt</th>
                            <th>Payment refCode</th>
                            <th>Payment status</th>
                        </thead>
                        <?php $sn= 1  ?>
                        <?php  foreach($payments as $payd){  ;?>
                        <tr>
                        <th><?php echo $sn++?></th>
                        
                         <td><?php echo $payd["pay_date"]?></td>
                         <td><?php echo $payd["pay_amount"]?></td>
                         <td><?php echo $payd["pay_refcode"]?></td>
                         <td><?php echo $payd["pay_status"]?></td>
                            
                        
                
                        </tr>
                        <?php    }  ; ?>
                     </table>
                     </div>
                     </div>
                    


                    



                    </div>
                </div>

               
                
            
                    
                  
                 
    
    
                </div>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>