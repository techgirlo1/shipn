
<?php
session_start();
error_reporting(E_ALL);
include_once "admin/classes/Invoice.php";
require_once "guards/user_guard.php";

if($_POST){
    if(isset($_POST["invoicebtn"])){
        $prod_id=$_POST["prod"];
        
    }

    $invoice1= new Invoice();
    $invoice=$invoice1->fetch_produser($prod_id);
     if(!$invoice){
   echo "<div style='margin:20px 20px'>
   <form action='prod_view.php' method='post'>
   <button style='color:white; background:black;border-radius:2px'>Back</button>
</form>
</div>";
   
        echo"<div style='color:green; text-align:center; margin-top:200px; font-size:25px'> 
  
INVOICE NOT AVAILABLE
<div>";

 
     }else{
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
                      
                    
                    

                      <?php
                    if(isset($_SESSION["success"])){
                    ?>
                       
                        
                    <p class="text-center mt-5 py-2 alert alert-success alert-dismissible" style="color:black"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><?php echo $_SESSION["success"];?></p>
                    
                    <?php unset($_SESSION["success"]);?>

               <?php
                    }
               ?>   
                      
                      
                      
                    
               
                </div>
            </div>
            <div class="row">
                <div class="col-12"style="width: 700px;margin:auto">
                    <div style="margin-top: 20px;">
                        <form action="prod_view.php" method="post">
                            <button class="btn btn-dark">Back</button>
                        </form>
                    </div>
                    <div class="row">
                     <div class="col-12 pay">



                     
                      <p style="text-align:right;font-size:12px">Sender : <?php echo $invoice["sender_name"]?></p>
                     <p style="text-align:right;font-size:12px"> <?php echo date("D-M-Y")?></p>
                     <p style="text-align:left;font-size:12px">Receiver : <?php echo $invoice["receiver_name"]?></p>
                     <hr>
                        
                     
                    





                     <b><span>Item</span></b>
                     <b><span style="padding-left:60px">Quantity</span></b>
                     <b><span style="padding-left:15px">Weight</span></b>
                     <b><span style="padding-left:15px">Unit price</span></b>
                     <b><span style="padding-left:15px">Total</span></b>
                     <hr>

                     
                     
                     

                     
                      
                        
                     <span style="font-size:12px"><?php echo $invoice["prod_name"]?></span>
                     <span style="padding-left:70px ;font-size:12px"><?php echo $invoice["prod_qty"]?></span>
                     <span style="padding-left:60px ;font-size:12px"><?php echo $invoice["prod_weight"]?></span>
                     <span style="padding-left:60px; font-size:12px">&#8358 <?php echo $invoice["prod_price"]?></span>
                     <span style="padding-left:35px ;font-size:12px">&#8358 <?php echo $invoice["prod_price"]?></span>
                     


                     <hr>
                     



                      <div style="text-align: right;margin-top: 20px;font-size:12px">
                            <b><span>Subtotal</span></b>
                            <span style="padding-left: 100px;">&#8358 <?php echo $invoice["prod_price"]?></span>
                          </div>
                              
                           <hr>

                           <div style="text-align: right;margin-top: 20px;">
                            <b><span>Total</span></b>
                            <span style="padding-left: 100px;">&#8358 <?php echo $invoice["prod_price"]?></span>
                          </div>
                            <hr>
                            <form action="pay.php" method="post">
                                <button type="submit" name="payment" class="btn btn-success">Make Payment</button>
                                <input type="hidden" name="prod" value="<?php echo $invoice["prod_invid"]?>">
                                </form>
                        </div>
                       </div> 



                    </div>
                </div>

               
            
                    
                  
                 
    
    
                </div>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>
    <?php

     }
         
    
}

?>



















