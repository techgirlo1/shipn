
<?php
session_start();
error_reporting(E_ALL);
include_once  "guards/admin_guard.php";
require_once "classes/Product.php";

     $prod= new Product();
    $products=$prod->fetch_produser();

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
                <div class="col-12 my-3">



                <form action="addcat.php" method="post">
                            <button class="btn btn-dark">Back</button>
                        </form>
                
                
                <?php
                    if(isset($_SESSION["successful"])){
                    ?>
                       
                        
                    <p class="text-center mt-5 py-2 alert alert-success alert-dismissible" style="color:black"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><?php echo $_SESSION["successful"];?></p>
                    
                    <?php unset($_SESSION["successful"]);?>

               <?php
                    }
               ?>

               <div class="row">
               <div class="col-12"> 
                <table class="table" border=1px>
                        <tr style="font-size:15px">
                        <th>S/N</th>
                            <th>Prod Name</th>
                            <th>Prod Qty</th>
                            <th>Prod_req_date</th>
                            <th>Sender_name</th>
                             <th>Sender's phone</th> 
                            <th>Recievers_name</th>
                             <th>Prod_img</th>
                            
                            
                            <th>Receiver's Address</th>
                            <th>Receiver's Phone</th>
                            <th>Invoice</th>
                            
                        </tr>


                        <?php $sn= 1  ?>
                        <?php  foreach($products as $product){  ;?>
                        <tr style="font-size:15px">
                        <th><?php echo $sn++?></th>
                         
                         <td class="create"><?php echo $product["prod_name"]?></td>
                            <td class="create"><?php echo $product["prod_qty"]?></td>
                            <td class="create"><?php echo $product["prod_requestdate"]?></td>
                            <td class="create"><?php echo $product["senders_name"]?></td>
                            <td><?php echo $product["senders_number"]?></td>
                            <td><?php echo $product["receivers_name"]?></td>
                           
                    <div class="text-center mb-3"> <td>
                <img src="../uploads/<?php echo $product['prod_img']; ?>" class="img-fluid">
                </td></div>
                            <td class="create"><?php echo $product["prod_delivery_address"]?></td>
                            <td class="create"><?php echo $product["receivers_phone"];?></td>

                    
                            </td>
                        
                            <td>
                                 <form action="invoice.php" method="post" id="myForm">
                                      <input type="hidden" name="prod" id="prod_id" value="<?php echo $product['prod_id']?>">
                                      <input type="submit" name="invoicebtn" value="<?php echo $product['button']?>" class="btn btn-dark">
                                      
                                      
                                 </form>
                            </td>
                            
                              
                        
                             
                
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