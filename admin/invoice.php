<?php
session_start();
require_once "classes/Product.php";
include_once "classes/Fetch.php";
require_once "classes/Payment.php";
  



    
if($_POST){
    if(isset($_POST["invoicebtn"])){
        $prod_id=$_POST["prod"];
         $newbutton="Invoice created";
         
         $prod= new Product();
         $products=$prod->update_btn($newbutton,$prod_id);
         
    $user= new Fetch();
    $prod_id=$user->fetch_prod($prod_id);

}   
}

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
                    <form action="prod_view.php" method="post">
                        <button type="submit" class="btn btn-dark" style="margin-top: 20px;">Back</button>
                     </form>

                    
                    <div class="row">
                     <div class="col-12 invoice">
                     <div style="text-align: center;">
                          <h1>Generate invoice</h1>
                          </div>
                        <form action="process/invoice_process.php" method="post">
                            <input type="text" name="sname"  value="<?php  echo $prod_id["senders_name"];?>" class="form-control my-3">
                             <input type="text" name="rname"  value="<?php  echo $prod_id["receivers_name"];?>"  class="form-control my-3">
                             <input type="text" name="pname" value="<?php  echo $prod_id["prod_name"];?>" class="form-control my-3">
                             <input type="number" name="pqty" value="<?php  echo $prod_id["prod_qty"] ;?>" class="form-control my-3">
                             <input type="text" name="pweight" value="<?php  echo $prod_id["prod_weight"];?>" class="form-control my-3">
                             <input type="number" name="pprice" placeholder="Price" class="form-control my-3">
                             <input type="hidden" name="user_id" class="form_control my-3" value= "<?php echo $prod_id["user_prodid"] ;?>">
                             <input type="hidden" name="prod_id" class="form_control my-3" value= "<?php echo $prod_id["prod_id"] ;?>">
                              <button type="submit" name="addprice"class="btn" style="box-shadow: 5px 5px 5px 5px gray;margin-top:70px;">Add Invoice</button>

                     </form>
                    </div>
                    </div>
                   </div>
                  </div>
                </div>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js" type="text/javascript"></script>
</body>
</html>




?>