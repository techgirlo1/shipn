<?php
session_start();
   error_reporting(E_ALL);

   include_once "guards/admin_guard.php";
   include_once "classes/Payment.php";

          $pay1= new Payment();
          $payments=$pay1->fetch_payment();

    
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
            <div class="col-md-8">
                
                        
                      <h1>SHI<span>PN</span><span style="font-size: 10px;">LOGiSTICS</span></h1>
                      </div> 
                      
                      <div class="col-md-4">
                        <a href="signin.php" style="text-decoration:none;color:white;padding-left:100px;font-size:20px">Logout</a>
                      </div>
                    </div>
                     
          

                    
   <div>
<i class="fa-solid fa-bars text-dark" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
  
</i>
</div>
                        <div class="row">
                        <div class="col-12 mb-4" style="width:700px; margin:auto">
                  

                        <?php
                    if(isset($_SESSION["successful"])){
                    ?>
                       
                        
                    <p class="text-center mt-5 py-2 alert alert-success alert-dismissible" style="color:black"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><?php echo $_SESSION["successful"];?></p>
                    
                    <?php unset($_SESSION["successful"]);?>

               <?php
                    }
               ?>
                        

                        <form action="process/addcat_process.php" method="post">
                          <div style="margin-top:30px">
                          <b><label for="cat"> Category Type</label></b>
                    <input type="text" name="cat" id="cat" class="form-control my-3">
                    </div>

                     <button type="submit" name="subcat"class="btn btn-success">Add category</button>


                        </form>
                    

                 
              
                 </div>
                 </div>









                     <div class="row">
                     <div class="col-12 adminn">
                     
                     <p style="color: black; padding:10px 60px;">Payment Overview</p>
                      

                     <table class="table table-striped my-5" border=1>
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

               <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasExampleLabel">Admin</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <div class="can">
      <a href="addcat.php">Overview</a><br>
      </div>
      
      
      <div>
       <a href="prod_view.php">View Product</a>
    </div>
     
  </div>
</div>


   <script src="assets/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
   </body>



</html>