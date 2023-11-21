
<?php
session_start();
include_once  "guards/user_guard.php";
error_reporting(E_ALL);
require_once "classes/Product.php";
include_once "classes/User.php";
  

if(isset($_SESSION["user_id"])){
    $user_id=$_SESSION["user_id"];
    
     
     
     $userr=new User();
     $user=$userr->fetch_user_details($user_id);
     
          $final_user_id =$user['user_id'];
    }
    $prod= new Product();
    $products=$prod->fetch_produser($final_user_id);
    
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
                    
                <table class="table" border=1px>
                        <tr style="font-size:15px">
                        <th>S/N</th>
                            <th>Prod Name</th>
                            <th>Prod Qty</th>
                            <th>Prod_req_date</th>
                            <th>Sender_name</th>
                             <th>Sender's phone</th> 
                            <th>Recievers_name</th>
                             <th>Receiver's Address</th>
                            <th>Receiver's Phone</th>
                            <th>Prod_img</th>
                            <th> Invoice</th>
                        </tr>


                        <?php $sn= 1  ?>
                        <?php  foreach($products as $product){  ;?>
                        <tr style="font-size:15px">
                        <th><?php echo $sn++?></th>
                        
                         <td><?php echo $product["prod_name"]?></td>
                            <td><?php echo $product["prod_qty"]?></td>
                            <td><?php echo $product["prod_requestdate"]?></td>
                            <td><?php echo $product["senders_name"]?></td>
                            <td><?php echo $product["senders_number"]?></td>
                            <td><?php echo $product["receivers_name"]?></td>
                            <td><?php echo $product["prod_delivery_address"]?></td>
                            <td><?php echo $product["receivers_phone"]?></td>
                                   
                    <div class="text-center mb-3"> <td>
                <img src="uploads/<?php echo $product['prod_img']; ?>" class="img-fluid">
                </td></div>
                           <td class="create">
                                 <form action="invoice.php" method="post">
                                      <input type="hidden" name="prod" value="<?php echo $product['prod_id']?>">
                                      <button type="submit"name="invoicebtn" style="font-size:12px" class="btn btn-dark">View invoice</button>
                                 </form>
                            </td>
                            
                
                        </tr>
                        <?php    }  ; ?>
                    </table>
                         
                       
                     </div>
                </div>

               
                
            
                    
                <form action="services.php" method="post">
                            <button class="btn btn-dark">Back</button>
                        </form>
                 
    
    
                </div>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>


    
</body>
</html>